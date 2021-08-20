<?php

namespace App\Containers\AppSection\Blog\Actions;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Containers\AppSection\Blog\Tasks\UpdateBlogTask;
use App\Containers\AppSection\Blog\UI\API\Requests\CreateBlogRequest;
use App\Containers\AppSection\Blog\UI\API\Requests\UpdateBlogRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateBlogAction extends Action
{
    public function run(UpdateBlogRequest $request)
    {
        $blog = app(UpdateBlogTask::class)->run(
            // add your request data here
            $request->id,
            $request->title,
            $request->description,
        );

        return $blog;

        // return app(UpdateBlogTask::class)->run($request->id, $data);
    }
}
