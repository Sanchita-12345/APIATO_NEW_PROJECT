<?php

namespace App\Containers\AppSection\Admin\Models;

use App\Ship\Parents\Models\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Admin extends Model implements JWTSubject
{
    protected $table= 'admins';
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'gender',
        'birth'
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
    protected string $resourceKey = 'Admin';

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
