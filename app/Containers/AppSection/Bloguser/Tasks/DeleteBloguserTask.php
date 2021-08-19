<?php

namespace App\Containers\AppSection\Bloguser\Tasks;

use App\Containers\AppSection\Bloguser\Data\Repositories\BloguserRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteBloguserTask extends Task
{
    protected BloguserRepository $repository;

    public function __construct(BloguserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): ?int
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
