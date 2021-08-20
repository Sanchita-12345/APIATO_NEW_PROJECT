<?php

namespace App\Containers\AppSection\Blog\Tasks;

use App\Containers\AppSection\Admin\Models\Admin;
use App\Containers\AppSection\Blog\Data\Repositories\BlogRepository;
use App\Containers\AppSection\Blog\Models\Blog;
use App\Ship\Parents\Tasks\Task;
use DB;
use JWTAuth;
use Log;

class GetAllBlogsTask extends Task
{
    protected Blog $repository;

    public function __construct(Blog $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $admin_id = $details["sub"];
        return DB::table('blogs')->where('admin_id', $admin_id)->get();
    }
}
