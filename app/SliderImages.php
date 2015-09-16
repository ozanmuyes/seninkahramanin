<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderImages extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "slider_images";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "slider_id",
        "order",
        "title",
        "subtitle",
        "link",
    ];

    public function images()
    {
        return $this->morphToMany("App\Image", "imageable");
    }

    public function slider()
    {
        return $this->belongsTo("App\Slider");
    }
}
