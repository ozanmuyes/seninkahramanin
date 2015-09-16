<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Product extends Model implements SluggableInterface
{
    use SluggableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "products";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "size_id",
        "name",
        "sex"
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        "started_at",
        "finished_at",
    ];

    protected $appends = [
        // "price",
        // "stock"
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

    public function size()
    {
        return $this->belongsTo("App\Size");
    }

    public function orders()
    {
        // Qty attribute on pivot table is only available from Order side
        return $this->belongsToMany("App\Order");
    }

    public function prices()
    {
        return $this->hasMany("App\Price");
    }

    public function stocks()
    {
        return $this->hasMany("App\Stock");
    }

    public function images()
    {
        return $this->morphToMany("App\Image", "imageable");
    }

    public function getPriceAttribute()
    {
        return $this->prices
                ->where("finished_at", null)
                ->sortByDesc("started_at")
                ->first();
    }

    public function getStockRemainingAttribute()
    {
        return $this->stocks
                ->where("finished_at", null)
                ->sortByDesc("started_at")
                ->first();
    }
}
