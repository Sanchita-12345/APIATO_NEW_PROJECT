<?php

namespace App\Containers\AppSection\Admin\UI\API\Transformers;

use App\Containers\AppSection\Admin\Models\Admin;
use App\Ship\Parents\Transformers\Transformer;

class AdminloginTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform( String $token): array
    {
        $response = [
            $token
        ];
        return $response;
    }
}
