<?php

namespace App\Containers\AppSection\Blog\Actions;

use App\Containers\AppSection\Blog\Tasks\DeleteBlogTask;
use App\Containers\AppSection\Blog\UI\API\Requests\DeleteBlogRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteBlogAction extends Action
{
    public function run(DeleteBlogRequest $request)
    {
        $delete = app(DeleteBlogTask::class)->run($request);
        return $delete;
    }
}
