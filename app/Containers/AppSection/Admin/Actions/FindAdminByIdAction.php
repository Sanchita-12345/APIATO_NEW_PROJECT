<?php

namespace App\Containers\AppSection\Admin\Actions;

use App\Containers\AppSection\Admin\Models\Admin;
use App\Containers\AppSection\Admin\Tasks\FindAdminByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindAdminByIdAction extends Action
{
    public function run(Request $request): Admin
    {
        return app(FindAdminByIdTask::class)->run($request->id);
    }
}
