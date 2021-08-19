<?php

namespace App\Containers\AppSection\Bloguser\Actions;

use App\Containers\AppSection\Bloguser\Tasks\GetAllBlogusersTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllBlogusersAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllBlogusersTask::class)->addRequestCriteria()->run();
    }
}
