<?php

namespace App\Containers\AppSection\Admin\Tasks;

use App\Containers\AppSection\Admin\Data\Repositories\AdminRepository;
use App\Containers\AppSection\Admin\Models\Admin;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindAdminByIdTask extends Task
{
    protected AdminRepository $repository;

    public function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): Admin
    {
        try {
            $admin = $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
        return $admin;
    }
}
