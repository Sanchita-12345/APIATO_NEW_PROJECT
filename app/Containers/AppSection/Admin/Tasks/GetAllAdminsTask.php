<?php

namespace App\Containers\AppSection\Admin\Tasks;

use App\Containers\AppSection\Admin\Data\Repositories\AdminRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllAdminsTask extends Task
{
    protected AdminRepository $repository;

    public function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
