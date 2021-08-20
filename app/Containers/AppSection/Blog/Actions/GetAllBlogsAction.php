<?php

namespace App\Containers\AppSection\Blog\Actions;

use App\Containers\AppSection\Blog\Tasks\GetAllBlogsTask;
use App\Containers\AppSection\Blog\UI\API\Requests\GetAllBlogsRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllBlogsAction extends Action
{
    public function run(GetAllBlogsRequest $request)
    {
        $blog = app(GetAllBlogsTask::class)->run(
            
        );

        return $blog;
    }
}
