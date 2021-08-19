<?php

namespace App\Containers\AppSection\Bloguser\Actions;

use App\Containers\AppSection\Bloguser\Models\Bloguser;
use App\Containers\AppSection\Bloguser\Tasks\CreateBloguserTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateBloguserAction extends Action
{
    public function run(Request $request): Bloguser
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateBloguserTask::class)->run($data);
    }
}
