<?php

namespace App\Containers\AppSection\Bloguser\Tasks;

use App\Containers\AppSection\Bloguser\Data\Repositories\BloguserRepository;
use App\Containers\AppSection\Bloguser\Models\Bloguser;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Hash;

class CreateBloguserTask extends Task
{
    protected Bloguser $repository;

    public function __construct(Bloguser $repository)
    {
        $this->repository = $repository;
    }

    public function run(string $name,string $email,string $password,string $mobile)
    {
        try {
            $bloguser =  $this->repository->create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'mobile' => $mobile,
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
        return $bloguser;
    }
}
