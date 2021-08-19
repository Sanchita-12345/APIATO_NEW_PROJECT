<?php

namespace App\Containers\AppSection\Blog\Actions;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Containers\AppSection\Blog\Tasks\CreateBlogTask;
use App\Containers\AppSection\Blog\UI\API\Requests\CreateBlogRequest;
use App\Ship\Parents\Actions\Action;

class CreateBlogAction extends Action
{
    public function run(CreateBlogRequest $request)
    {
        $blog = app(CreateBlogTask::class)->run(
            // add your request data here
            $request->title,
            $request->description,
        );

        return $blog;
    }
}
