<?php

namespace App\Containers\AppSection\Bloguser\Tasks;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Containers\AppSection\Bloguser\Models\Bloguser;
use App\Ship\Parents\Tasks\Task;
use DB;
use JWTAuth;

class UserGetAllBlogsTask extends Task
{
    protected Bloguser $repository;
    public function __construct(Bloguser $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        Blog::all();
        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $user_id = $details["sub"];
        return DB::table('blogs')->get();
    }
}
