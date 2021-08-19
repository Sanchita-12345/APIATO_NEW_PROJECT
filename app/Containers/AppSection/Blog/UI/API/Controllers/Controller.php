<?php

namespace App\Containers\AppSection\Blog\UI\API\Controllers;

use App\Containers\AppSection\Blog\UI\API\Requests\CreateBlogRequest;
use App\Containers\AppSection\Blog\UI\API\Requests\DeleteBlogRequest;
use App\Containers\AppSection\Blog\UI\API\Requests\GetAllBlogsRequest;
use App\Containers\AppSection\Blog\UI\API\Requests\FindBlogByIdRequest;
use App\Containers\AppSection\Blog\UI\API\Requests\UpdateBlogRequest;
use App\Containers\AppSection\Blog\UI\API\Transformers\BlogTransformer;
use App\Containers\AppSection\Blog\Actions\CreateBlogAction;
use App\Containers\AppSection\Blog\Actions\FindBlogByIdAction;
use App\Containers\AppSection\Blog\Actions\GetAllBlogsAction;
use App\Containers\AppSection\Blog\Actions\UpdateBlogAction;
use App\Containers\AppSection\Blog\Actions\DeleteBlogAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createBlog(CreateBlogRequest $request): JsonResponse
    {
        $blog = app(CreateBlogAction::class)->run($request);
        return $this->created($this->transform($blog, BlogTransformer::class));
    }

    public function findBlogById(FindBlogByIdRequest $request): array
    {
        $blog = app(FindBlogByIdAction::class)->run($request);
        return $this->transform($blog, BlogTransformer::class);
    }

    public function getAllBlogs(GetAllBlogsRequest $request): array
    {
        $blogs = app(GetAllBlogsAction::class)->run($request);
        return $this->transform($blogs, BlogTransformer::class);
    }

    public function updateBlog(UpdateBlogRequest $request): array
    {
        $blog = app(UpdateBlogAction::class)->run($request);
        return $this->transform($blog, BlogTransformer::class);
    }

    public function deleteBlog(DeleteBlogRequest $request): JsonResponse
    {
        app(DeleteBlogAction::class)->run($request);
        return $this->noContent();
    }
}
