<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use SoapWrapper;

class Order extends Model
{
    const STATUS_REJECTED = -1;
    const STATUS_ORDERED = 0;
    const STATUS_PRINTING = 1;
    const STATUS_SHIPPED = 2;
    const STATUS_DELIVERED = 3;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "orders";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "address_id",
        "rejected_at",
        "printing_at",
        "shipped_at",
        "delivered_at",
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        "rejected_at",
        "printing_at",
        "shipped_at",
        "delivered_at",
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        "status"
    ];

    public function address()
    {
        return $this->belongsTo("App\Address");
    }

    public function products()
    {
        return $this->belongsToMany("App\Product")->withPivot("quantity");
    }

    public function isRejected()
    {
        return ($this->attributes["rejected_at"] !== null);
    }

    public function getStatusAttribute()
    {
        if ($this->attributes["rejected_at"] !== null) {
            return self::STATUS_REJECTED;
        }

        if ($this->attributes["delivered_at"] !== null) {
            return self::STATUS_DELIVERED;
        } else if ($this->attributes["shipped_at"] !== null) {
            return self::STATUS_SHIPPED;
        } else if ($this->attributes["printing_at"] !== null) {
            return self::STATUS_PRINTING;
        } else {
            return self::STATUS_ORDERED;
        }
    }

    // Status sıra takibi yapılmalı mı? Yani STATUS_PRINTING'den önce STATUS_SHIPPED ile çağrılırsa ne olacak?
    // Bunun için belki $strict flag'i parametre kullanılabilir - default TRUE.
    public function setStatus($newStatus)
    {
        if ($this->isRejected()) {
            return;
        }

        // Since the order is created status automatically set to STATUS_ORDERED,
        // we should NOT assign the same status again.
        if ($newStatus === self::STATUS_ORDERED) {
            return;
        }

        // We should NOT be assigning the same status over and over again
        if ($this->status === $newStatus) {
            return;
        }

        switch ($newStatus) {
            case self::STATUS_PRINTING:
                $this->printing_at = Carbon::now();
                $this->save();
                break;

            case self::STATUS_SHIPPED:
                $this->shipped_at = Carbon::now();
                $this->save();
                break;

            case self::STATUS_DELIVERED:
                $this->delivered_at = Carbon::now();
                $this->save();
                break;
        }
    }

    public function getStatusAsString()
    {
        switch ($this->getStatusAttribute()) {
            case self::STATUS_REJECTED:
                return trans("status.rejected");

            case self::STATUS_ORDERED:
                return trans("status.ordered");

            case self::STATUS_PRINTING:
                return trans("status.printing");

            case self::STATUS_SHIPPED:
                return trans("status.shipped");

            case self::STATUS_DELIVERED:
                return trans("status.delivered");

            default:
                return trans("status.unknown");
        }
    }

    public function getCargoStatus()
    {
        return;

        SoapWrapper::add(function ($service) {
            $service
                ->name("suratkargo")
                ->wsdl("http://webservices.suratkargo.com.tr/services.asmx?WSDL")
                ->cache(WSDL_CACHE_NONE);
        });

        $data = [
            "WebSiparisKodundanKargoTeslimatBilgisi" => [
                "gonderenCariKodu" => "1010390478",
                "satisKodu" => "1234567890"
            ]
        ];

        SoapWrapper::service("suratkargo", function ($service) use ($data) {
// dd($service->getFunctions());
// dd($service->getTypes());

            $result = $service->call("WebSiparisKodundanKargoTeslimatBilgisi", $data)->WebSiparisKodundanKargoTeslimatBilgisiResult;
        });
    }
}
