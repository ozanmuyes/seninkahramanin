<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use App\SliderImages;

class Slider extends Model implements SluggableInterface
{
    use SluggableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "sliders";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
    ];

    /**
     * Sluggable plugin options
     *
     * @var array
     */
    protected $sluggable = [
        "build_from" => "name",
        "save_to" => "slug",
    ];

    public function sliderImages()
    {
        return $this->hasMany("App\SliderImages");
    }

    public function getImagesAttribute()
    {
        return $this->sliderImages
            ->sortBy("order");
    }

    public function setImagesAttribute($newImages)
    {
        // Delete all images belongs to the slider
        //
        $sliderImages = $this->sliderImages;

        foreach ($sliderImages as $sliderImage) {
            $sliderImage->delete();
        }

        // Add given images to the slider
        //
        $newImagesCount = count($newImages);

        for ($i = 0; $i < $newImagesCount; $i++) {
            $newSliderImages = SliderImages::create([
                "slider_id" => $this->attributes["id"],
                "order" => isset($newImages[$i]["order"]) ? $newImages[$i]["order"] : $i,
                "title" => isset($newImages[$i]["title"]) ? $newImages[$i]["title"] : null,
                "subtitle" => isset($newImages[$i]["subtitle"]) ? $newImages[$i]["subtitle"] : null,
                "link" => isset($newImages[$i]["link"]) ? $newImages[$i]["link"] : null
            ]);

            $newSliderImages->images()->attach($newImages[$i]["id"]);
        }
    }
}
