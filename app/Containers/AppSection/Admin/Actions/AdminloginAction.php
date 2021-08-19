<?php

namespace App\Containers\AppSection\Admin\Actions;

use App\Containers\AppSection\Admin\Models\Admin;
use App\Containers\AppSection\Admin\Tasks\AdminloginTask;
use App\Containers\AppSection\Admin\UI\API\Requests\AdminloginRequest;
use App\Containers\AppSection\Authentication\Exceptions\LoginFailedException;
use App\Containers\AppSection\Authentication\Exceptions\UserNotConfirmedException;
use App\Ship\Parents\Actions\Action;
use JWTAuth;

class AdminloginAction extends Action
{
    public function run(AdminloginRequest $request)
    {
        $admin = app(AdminloginTask::class)->run(
            $request->email,
            $request->password,
        );
        return $admin;
    }
}
