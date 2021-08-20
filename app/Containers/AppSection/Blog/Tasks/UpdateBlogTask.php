<?php

namespace App\Containers\AppSection\Blog\Tasks;

use App\Containers\AppSection\Admin\Models\Admin;
use App\Containers\AppSection\Blog\Data\Repositories\BlogRepository;
use App\Containers\AppSection\Blog\Models\Blog;
use App\Containers\AppSection\Blog\UI\API\Requests\UpdateBlogRequest;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use JWTAuth;
use Log;

class UpdateBlogTask extends Task
{
    protected Blog $repository;

    public function __construct(Blog $repository)
    {
        $this->repository = $repository;
    }

    public function run($blogId,String $title, String $description)
    {

        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $adminId = $details["sub"];

        $adminPresent = Admin::where('id', $adminId)->value('id');
        $blogIdPresent = Blog::where('id', $blogId)->value('id');
        $blogsAdmin = Blog::where('id', $blogId)->value('admin_id');
        if(!$adminPresent){
            $message ='invalid credentials';
            return $message;
        }
        if(!$blogIdPresent){
            $message = "No blog is present with the given id";
            return $message;
        }
        if($adminPresent == $blogsAdmin){
            $this->repository->where('id', $blogIdPresent)->update([
                'admin_id' => $adminId,
                'title' => $title,
                'description' => $description
            ]);
            return $message = "Blog updated successfully";
        }
        return $message = "No blogs are present for this admin";
    }
}
