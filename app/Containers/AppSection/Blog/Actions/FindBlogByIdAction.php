<?php

namespace App\Containers\AppSection\Blog\Actions;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Containers\AppSection\Blog\Tasks\FindBlogByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindBlogByIdAction extends Action
{
    public function run(Request $request): Blog
    {
        return app(FindBlogByIdTask::class)->run($request->id);
    }
}
