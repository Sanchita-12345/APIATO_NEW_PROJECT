<?php

namespace App\Containers\AppSection\Blog\Actions;

use App\Containers\AppSection\Blog\Tasks\DeleteBlogTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteBlogAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteBlogTask::class)->run($request->id);
    }
}
