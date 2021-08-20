<?php

namespace App\Containers\AppSection\Blog\UI\API\Transformers;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Ship\Parents\Transformers\Transformer;
use DB;

class GetBlogsTransformer extends Transformer
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
            $blog
        ];
        return $response;
    }
}
