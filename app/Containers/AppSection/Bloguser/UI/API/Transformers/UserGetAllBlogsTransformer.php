<?php

namespace App\Containers\AppSection\Bloguser\UI\API\Transformers;

use App\Containers\AppSection\Bloguser\Models\Bloguser;
use App\Ship\Parents\Transformers\Transformer;

class UserGetAllBlogsTransformer extends Transformer
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

    public function transform($blog): array
    {
        $response = [
            // 'object' => $bloguser->getResourceKey(),
            // 'id' => $bloguser->getHashedKey(),
            // 'created_at' => $bloguser->created_at,
            // 'updated_at' => $bloguser->updated_at,
            // 'readable_created_at' => $bloguser->created_at->diffForHumans(),
            // 'readable_updated_at' => $bloguser->updated_at->diffForHumans(),
            $blog
        ];

        // $response = $this->ifAdmin([
        //     'real_id'    => $bloguser->id,
        //     // 'deleted_at' => $bloguser->deleted_at,
        // ], $response);

        return $response;
    }
}
