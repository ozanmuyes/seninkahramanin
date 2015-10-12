<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

use DB;

use App\User;
use App\Image;

class DestroyUser extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Delete user related pictures
        $imageables = DB::select(
            "SELECT `image_id` FROM `imageables` WHERE `imageable_id` = :id AND `imageable_type` = :type",
            [
                "id" => $this->user->id,
                "type" => "App\User"
            ]
        );

        // Right after getting the IDs, detach all pictures from user
        $this->user->pictures()->detach();

        $imageableIds = [];

        foreach ($imageables as $imageable) {
            $imageableIds[] = $imageable->image_id;
        }

        $pictures = Image::find($imageableIds);

        foreach ($pictures as $picture) {
            unlink(public_path($picture->path));

            $picture->delete();
        }

        // Finally delete user record
        $this->user->delete();
    }
}
