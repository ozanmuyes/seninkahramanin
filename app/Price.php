<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "prices";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "product_id",
        "amount",
        "currency",
        "started_at",
        "finished_at"
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

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "amount" => "float",
    ];

    public function product()
    {
        return $this->belongsTo("App\Product");
    }

    public function getWithCurrencyAttribute()
    {
        return $this["attributes"]["amount"] . " " . mb_strtoupper($this["attributes"]["currency"]);
    }

    public function getWithoutCurrencyAttribute()
    {
        return $this["attributes"]["amount"];
    }
}
