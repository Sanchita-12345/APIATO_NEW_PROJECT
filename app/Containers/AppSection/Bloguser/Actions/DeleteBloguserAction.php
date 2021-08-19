<?php

namespace App\Containers\AppSection\Bloguser\Actions;

use App\Containers\AppSection\Bloguser\Tasks\DeleteBloguserTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteBloguserAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteBloguserTask::class)->run($request->id);
    }
}
