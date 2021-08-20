<?php

namespace App\Containers\AppSection\Bloguser\UI\API\Controllers;

use App\Containers\AppSection\Bloguser\Actions\BloguserloginAction;
use App\Containers\AppSection\Bloguser\UI\API\Requests\CreateBloguserRequest;
use App\Containers\AppSection\Bloguser\UI\API\Requests\DeleteBloguserRequest;
use App\Containers\AppSection\Bloguser\UI\API\Requests\GetAllBlogusersRequest;
use App\Containers\AppSection\Bloguser\UI\API\Requests\FindBloguserByIdRequest;
use App\Containers\AppSection\Bloguser\UI\API\Requests\UpdateBloguserRequest;
use App\Containers\AppSection\Bloguser\UI\API\Transformers\BloguserTransformer;
use App\Containers\AppSection\Bloguser\Actions\CreateBloguserAction;
use App\Containers\AppSection\Bloguser\Actions\FindBloguserByIdAction;
use App\Containers\AppSection\Bloguser\Actions\GetAllBlogusersAction;
use App\Containers\AppSection\Bloguser\Actions\UpdateBloguserAction;
use App\Containers\AppSection\Bloguser\Actions\DeleteBloguserAction;
use App\Containers\AppSection\Bloguser\UI\API\Requests\BloguserloginRequest;
use App\Containers\AppSection\Bloguser\UI\API\Transformers\BloguserloginTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createBloguser(CreateBloguserRequest $request): JsonResponse
    {
        $bloguser = app(CreateBloguserAction::class)->run($request);
        return $this->created($this->transform($bloguser, BloguserTransformer::class));
    }

    public function loginUser(BloguserloginRequest $request): JsonResponse
    {
        $bloguser = app(BloguserloginAction::class)->run($request);
        return $this->created($this->transform($bloguser, BloguserloginTransformer::class));
    }

    public function findBloguserById(FindBloguserByIdRequest $request): array
    {
        $bloguser = app(FindBloguserByIdAction::class)->run($request);
        return $this->transform($bloguser, BloguserTransformer::class);
    }

    public function getAllBlogusers(GetAllBlogusersRequest $request): array
    {
        $blogusers = app(GetAllBlogusersAction::class)->run($request);
        return $this->transform($blogusers, BloguserTransformer::class);
    }

    public function updateBloguser(UpdateBloguserRequest $request): array
    {
        $bloguser = app(UpdateBloguserAction::class)->run($request);
        return $this->transform($bloguser, BloguserTransformer::class);
    }

    public function deleteBloguser(DeleteBloguserRequest $request): JsonResponse
    {
        app(DeleteBloguserAction::class)->run($request);
        return $this->noContent();
    }
}
