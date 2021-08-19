<?php

namespace App\Containers\AppSection\Blog\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class BlogRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
