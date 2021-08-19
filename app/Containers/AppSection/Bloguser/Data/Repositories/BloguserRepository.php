<?php

namespace App\Containers\AppSection\Bloguser\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class BloguserRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
