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
            'message' => 'blog created successfully'
        ];
        return $response;
    }
}
