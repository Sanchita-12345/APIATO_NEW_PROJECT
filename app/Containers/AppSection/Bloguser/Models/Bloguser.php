<?php

namespace App\Containers\AppSection\Bloguser\Models;

use App\Ship\Parents\Models\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Bloguser extends Model implements JWTSubject
{
    protected $table = 'blogusers';
    protected $fillable = [
        'name','email','password','mobile'
    ];

    protected $attributes = [

    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Bloguser';
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
