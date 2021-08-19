<?php

namespace App\Containers\AppSection\Bloguser\Tasks;

use App\Containers\AppSection\Bloguser\Data\Repositories\BloguserRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindBloguserByIdTask extends Task
{
    protected BloguserRepository $repository;

    public function __construct(BloguserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
