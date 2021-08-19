<?php

namespace App\Containers\AppSection\Admin\Actions;

use App\Containers\AppSection\Admin\Models\Admin;
use App\Containers\AppSection\Admin\Tasks\CreateAdminTask;
use App\Containers\AppSection\Admin\UI\API\Requests\CreateAdminRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateAdminAction extends Action
{
    public function run(CreateAdminRequest $request): Admin
    {
        $admin = app(CreateAdminTask::class)->run(
            // false,
            $request->name,
            $request->email,
            $request->password,
            $request->mobile,
            $request->birth,
            $request->gender,
        );

        // return app(CreateAdminTask::class)->run($data);
        // app(CreateAdminTask::class)->run($admin, ['admin']);
        return $admin;
    }
}
