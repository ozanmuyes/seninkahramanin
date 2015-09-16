<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "sizes";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "description"
    ];

    public function products()
    {
        return $this->hasMany("App\Product");
    }

    public static function getNames()
    {
        return self::select("name")->get()->toArray();
    }
}
