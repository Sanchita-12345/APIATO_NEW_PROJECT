<?php

namespace App\Containers\AppSection\Blog\UI\API\Transformers;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Ship\Parents\Transformers\Transformer;

class DeleteBlogTransformer extends Transformer
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

    public function transform(String $blog): array
    {
        $response = [
            'id' =>(json_decode($blog))->id,
            'message' => 'Blog deleted successfully',

        ];

        return $response;
    }
}
