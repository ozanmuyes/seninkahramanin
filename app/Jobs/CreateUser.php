<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;
use App\Image as Picture;

use Image;
use Log;

class CreateUser extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, $image)
    {
        $this->user = $user;

        $profilePicture = Image::make($image);
        $profilePicture->resize(256, 256);
        $profilePicture->save(public_path("img/users/" . $this->user->username . "-256.jpg"));
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Save profile picture
        $profilePicture = Image::make(public_path("img/users/" . $this->user->username . "-256.jpg"));

        $profilePicture->resize(128, 128);
        $profilePicture->save(public_path("img/users/" . $this->user->username . ".jpg"));

        $profilePicture->resize(48, 48);
        $profilePicture->save(public_path("img/users/" . $this->user->username . "-48.jpg"));

        // Save related pictures data onto database
        $profilePicture = Picture::create([
            "directory" => "users",
            "name" => $this->user->username,
            "extension" => "jpg",
            "title" => null,
            "alt" => $this->user->name . " kullanıcısının profil resmi",
            "width" => 128,
            "height" => 128,
            "size" => filesize(public_path("img/users/" . $this->user->username . ".jpg"))
        ]);
        $this->user->pictures()->save($profilePicture);

        $profilePictureSmall = Picture::create([
            "directory" => "users",
            "name" => $this->user->username . "-48",
            "extension" => "jpg",
            "title" => null,
            "alt" => $this->user->name . " kullanıcısının küçük profil resmi",
            "width" => 48,
            "height" => 48,
            "size" => filesize(public_path("img/users/" . $this->user->username . "-48.jpg"))
        ]);
        $this->user->pictures()->save($profilePictureSmall);

        $profilePictureMedium = Picture::create([
            "directory" => "users",
            "name" => $this->user->username . "-256",
            "extension" => "jpg",
            "title" => null,
            "alt" => $this->user->name . " kullanıcısının büyük profil resmi",
            "width" => 256,
            "height" => 256,
            "size" => filesize(public_path("img/users/" . $this->user->username . "-256.jpg"))
        ]);
        $this->user->pictures()->save($profilePictureMedium);

        // TODO Notify admins
        // TODO Send welcome email
    }
}
