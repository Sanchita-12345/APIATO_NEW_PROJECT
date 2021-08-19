<?php

namespace App\Containers\AppSection\Admin\Tasks;

use App\Containers\AppSection\Admin\Models\Admin;
use App\Ship\Parents\Tasks\Task;

class AdminloginTask extends Task
{
    public function __construct()
    {
        // ..
    }

    public function run(String $token)
    {
        return $token;
    }
}
