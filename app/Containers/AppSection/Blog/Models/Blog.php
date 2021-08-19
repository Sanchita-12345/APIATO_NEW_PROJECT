<?php

namespace App\Containers\AppSection\Blog\Models;

use App\Ship\Parents\Models\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        'title', 'description', 'admin_id'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

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
    protected string $resourceKey = 'Blog';
}
