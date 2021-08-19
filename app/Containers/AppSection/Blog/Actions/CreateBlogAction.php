<?php

namespace App\Containers\AppSection\Blog\Actions;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Containers\AppSection\Blog\Tasks\CreateBlogTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateBlogAction extends Action
{
    public function run(Request $request): Blog
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateBlogTask::class)->run($data);
    }
}
