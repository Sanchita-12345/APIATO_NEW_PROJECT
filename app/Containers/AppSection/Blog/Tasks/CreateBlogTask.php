<?php

namespace App\Containers\AppSection\Blog\Tasks;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Ship\Parents\Tasks\Task;
use JWTAuth;
use Log;

class CreateBlogTask extends Task
{
    protected Blog $repository;

    public function __construct(Blog $repository)
    {
        $this->repository = $repository;
    }

    public function run(String $title, String $description)
    {    
        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $id = $details["sub"];

            $blog =  $this->repository->create([
                'title' => $title,
                'description' => $description,
                'admin_id' => $id,

            ]);
        Log::info($blog);
        return $blog;
    }
}
