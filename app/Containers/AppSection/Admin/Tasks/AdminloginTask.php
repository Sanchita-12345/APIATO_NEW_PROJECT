<?php

namespace App\Containers\AppSection\Admin\Tasks;

use App\Containers\AppSection\Admin\Models\Admin;
use App\Ship\Parents\Tasks\Task;
use Hash;
use JWTAuth;

class AdminloginTask extends Task
{
    public function __construct()
    {
        // ..
    }

    public function run(String $email, String $password)
    {
        $adminPresent = Admin::where('email', $email)->first();
        $passwordMatch = Admin::where('email', $email)->value('password');

        if(!$adminPresent){
            $message = "Invalid Email !!!";
            return $message;
        }
        if(!Hash::check($password, $passwordMatch)){
            $message = "Password is not correct !!!";
            return $message;
        }
        $token = JWTAuth::fromUser($adminPresent);
        return $token;
    }
}
