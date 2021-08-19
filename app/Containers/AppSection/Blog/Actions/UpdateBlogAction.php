<?php

namespace App\Containers\AppSection\Blog\Actions;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Containers\AppSection\Blog\Tasks\UpdateBlogTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateBlogAction extends Action
{
    public function run(Request $request): Blog
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateBlogTask::class)->run($request->id, $data);
    }
}
