<?php

namespace App\Containers\AppSection\Blog\Actions;

use App\Containers\AppSection\Blog\Tasks\GetAllBlogsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllBlogsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllBlogsTask::class)->addRequestCriteria()->run();
    }
}
