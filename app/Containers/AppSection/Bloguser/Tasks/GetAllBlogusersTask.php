<?php

namespace App\Containers\AppSection\Bloguser\Tasks;

use App\Containers\AppSection\Bloguser\Data\Repositories\BloguserRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBlogusersTask extends Task
{
    protected BloguserRepository $repository;

    public function __construct(BloguserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
