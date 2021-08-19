<?php

namespace App\Containers\AppSection\Bloguser\Actions;

use App\Containers\AppSection\Bloguser\Models\Bloguser;
use App\Containers\AppSection\Bloguser\Tasks\FindBloguserByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindBloguserByIdAction extends Action
{
    public function run(Request $request): Bloguser
    {
        return app(FindBloguserByIdTask::class)->run($request->id);
    }
}
