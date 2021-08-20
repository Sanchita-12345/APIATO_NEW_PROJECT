<?php

namespace App\Containers\AppSection\Bloguser\Tasks;

use App\Containers\AppSection\Bloguser\Models\Bloguser;
use App\Ship\Parents\Tasks\Task;
use Hash;
use JWTAuth;

class BloguserloginTask extends Task
{
    public function __construct()
    {
        // ..
    }

    public function run(String $email, String $password)
    {
        $userPresent = Bloguser::where('email', $email)->first();
        $passwordMatch = Bloguser::where('email', $email)->value('password');

        if(!$userPresent){
            $message = "Invalid Email !!! please register first !!!";
            return $message;
        }
        if(!Hash::check($password, $passwordMatch)){
            $message = "Password is not correct !!!";
            return $message;
        }
        $token = JWTAuth::fromUser($userPresent);
        return $token;
    }
}
