<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Image extends Model implements SluggableInterface
{
    use SluggableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "images";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "directory",
        "name",
        "extension",
        "title",
        "alt",
        "width",
        "height",
        "size",
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

    public function users()
    {
        return $this->morphedByMany("App\User", "imageable");
    }

    public function products()
    {
        return $this->morphedByMany("App\Product", "imageable");
    }

    public function sliders()
    {
        return $this->morphedByMany("App\SliderImages", "imageable");
    }

    public function getAspectRatioAttribute()
    {
        return ($this->attributes["width"] / $this->attributes["height"]);
    }

    public function getPathAttribute()
    {
        return "img" . DIRECTORY_SEPARATOR .
               trim($this["attributes"]["directory"], "\\/") . DIRECTORY_SEPARATOR .
               $this["attributes"]["name"] . "." . $this["attributes"]["extension"];
    }
}
