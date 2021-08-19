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

    public function transform($token): array
    {
        $response = [
            'object' => 'Token',
            'access_token' => $token,
            'token_type' => 'Bearer',
            // 'id' => $admin->getHashedKey(),
            // 'created_at' => $admin->created_at,
            // 'updated_at' => $admin->updated_at,
            // 'readable_created_at' => $admin->created_at->diffForHumans(),
            // 'readable_updated_at' => $admin->updated_at->diffForHumans(),
            'message' => 'succesfully logged in',
            // 'token' => $token
        ];

        // $response = $this->ifAdmin([
        //     'real_id'    => $admin->id,
        //     // 'deleted_at' => $admin->deleted_at,
        // ], $response);

        return $response;
    }
}
