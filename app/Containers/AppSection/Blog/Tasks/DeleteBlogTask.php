<?php

namespace App\Containers\AppSection\Blog\Tasks;

use App\Containers\AppSection\Blog\Data\Repositories\BlogRepository;
use App\Containers\AppSection\Blog\Models\Blog;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use JWTAuth;

class DeleteBlogTask extends Task
{
    protected Blog $repository;

    public function __construct(Blog $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        $blog=Blog::findOrFail($id);
        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $adminId = $details["sub"];
        $adminPresent = Blog::where('admin_id', $adminId)->value('admin_id');
        if($adminPresent){     
            $deleted= $blog->each->delete();
            return $deleted;
        }
    }
}
