<?php

namespace App\Containers\AppSection\Admin\Tasks;

// use App\Containers\AppSection\Admin\Data\Repositories\AdminRepository;
use App\Containers\AppSection\Admin\Models\Admin;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Hash;

class CreateAdminTask extends Task
{
    protected Admin $repository;

    public function __construct(Admin $repository)
    {
        $this->repository = $repository;
    }

    public function run(string $name,string $email,string $password,string $mobile,string $birth,string $gender)
    {
        try {
            $admin =  $this->repository->create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'mobile' => $mobile,
                'birth' => $birth,
                'gender' => $gender
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
        return $admin;
    }
}
