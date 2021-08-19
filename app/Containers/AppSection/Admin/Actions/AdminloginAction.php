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
        // $var = app(Task::class)->run($arg1, $arg2);
        $sanitizedData = $request->sanitizeInput([
            'email',
            'password',
        ]);
        $admin = app(AdminloginTask::class)->run(
            true,
            $request->email,
            $request->password,
            // $email, $password
            // $sanitizedData
        );
        $isSuccessful = app(AdminloginTask::class)->run(
            $sanitizedData['email'],
            $sanitizedData['password']
        );
        $email = $request->get('email');
        $user = Admin::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);
        return $token;
        if ($isSuccessful) {
            $user = Admin::user();
        } else {
            throw new LoginFailedException();
        }

        $isUserConfirmed = app(CheckIfUserEmailIsConfirmedTask::class)->run($user);

        if (!$isUserConfirmed) {
            throw new UserNotConfirmedException();
        }

        return $token;
    }
}
