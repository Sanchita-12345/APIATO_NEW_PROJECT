<?php

namespace App\Containers\AppSection\Bloguser\Actions;

use App\Containers\AppSection\Bloguser\Tasks\BloguserloginTask;
use App\Containers\AppSection\Bloguser\UI\API\Requests\BloguserloginRequest;
use App\Ship\Parents\Actions\Action;

class BloguserloginAction extends Action
{
    public function run(BloguserloginRequest $request)
    {
        $bloguser = app(BloguserloginTask::class)->run(
            $request->email,
            $request->password,
        );
        return $bloguser;
    }
}
