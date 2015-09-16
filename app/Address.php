<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "addresses";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "user_id",
        "title",
        "phone_number",
        "line_1",
        "line_2",
        "line_3",
        "neighborhood",
        "city",
        "description",
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function orders()
    {
        return $this->hasMany("App\Order");
    }

    public function __toString()
    {
        return $this->attributes["line_1"];
    }
}
