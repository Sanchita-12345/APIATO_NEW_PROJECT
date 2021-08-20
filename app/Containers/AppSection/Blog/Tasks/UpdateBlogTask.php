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

    public function run(String $title, String $description)
    {
        $blog = new Blog();
        // $blog->id = $request->input('id');

        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $blog->admin_id = $details["sub"];
        $adminId = Admin::where('id', $blog->admin_id)->value('id');
        if(!$adminId){
            // return response()->json(['status' => 409,'message'=>'No admin is present in this id']);
            $message ='no admin prsent in this id';
            return $message;
        }
        $blog->user_id = $adminId;
        // $blog->title = $request->input('title');
        // $blog->description = $request->input('description');
        Blog::where('id',$blog->id)->update([
                'title' => $title,
                'description' => $description,
                // 'admin_id' => $admin_id,

            ]);
        // Log::info($blog);
        return $blog;
    }
}
