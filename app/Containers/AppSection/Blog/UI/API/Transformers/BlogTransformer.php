<?php

namespace App\Containers\AppSection\Blog\UI\API\Transformers;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Ship\Parents\Transformers\Transformer;

class BlogTransformer extends Transformer
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

    public function transform(Blog $blog): array
    {
        $response = [
            'object' => $blog->getResourceKey(),
            'id' => $blog->getHashedKey(),
            'created_at' => $blog->created_at,
            'updated_at' => $blog->updated_at,
            'readable_created_at' => $blog->created_at->diffForHumans(),
            'readable_updated_at' => $blog->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $blog->id,
            // 'deleted_at' => $blog->deleted_at,
        ], $response);

        return $response;
    }
}
