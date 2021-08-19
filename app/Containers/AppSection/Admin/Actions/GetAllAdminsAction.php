<?php

namespace App\Containers\AppSection\Admin\Actions;

use App\Containers\AppSection\Admin\Tasks\GetAllAdminsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllAdminsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllAdminsTask::class)->addRequestCriteria()->run();
    }
}
