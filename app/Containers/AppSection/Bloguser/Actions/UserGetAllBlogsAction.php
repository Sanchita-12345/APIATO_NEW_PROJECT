<?php

namespace App\Containers\AppSection\Bloguser\Actions;

use App\Containers\AppSection\Bloguser\Tasks\UserGetAllBlogsTask;
use App\Containers\AppSection\Bloguser\UI\API\Requests\UserGetAllBlogsRequest;
use App\Ship\Parents\Actions\Action;

class UserGetAllBlogsAction extends Action
{
    public function run(UserGetAllBlogsRequest $request)
    {
        $blog = app(UserGetAllBlogsTask::class)->run(
            
        );

        return $blog;
    }
}
