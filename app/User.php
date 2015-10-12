<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Bican\Roles\Traits\HasRoleAndPermission;
use Bican\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class User extends Model implements
    AuthenticatableContract,
    CanResetPasswordContract,
    HasRoleAndPermissionContract,
    SluggableInterface
{
    use Authenticatable,
        CanResetPassword,
        HasRoleAndPermission,
        SluggableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "password"
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        "password",
        "remember_token"
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        "name"
    ];

    /**
     * Sluggable plugin options
     *
     * @var array
     */
    protected $sluggable = [
        "build_from" => "name",
        "save_to" => "username",
    ];

    public function addresses()
    {
        return $this->hasMany("App\Address");
    }

    public function pictures()
    {
        return $this->morphToMany("App\Image", "imageable");
    }

    public function orders()
    {
        return $this->hasManyThrough("App\Order", "App\Address");
    }

    /**
     * Concatenates user's first name and last name.
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }

    /**
     * Returns big profile picture
     *
     * @return App\Image
     */
    public function profilePicture()
    {
        return $this->pictures->first();
    }

    /**
     * Returns medium profile picture
     *
     * @return App\Image
     */
    public function profilePictureMedium()
    {
        return $this->pictures[1];
    }

    /**
     * Returns small profile picture
     *
     * @return App\Image
     */
    public function profilePictureSmall()
    {
        return $this->pictures[2];
    }
}
