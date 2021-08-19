<?php

namespace App\Containers\AppSection\Bloguser\Actions;

use App\Containers\AppSection\Bloguser\Models\Bloguser;
use App\Containers\AppSection\Bloguser\Tasks\UpdateBloguserTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateBloguserAction extends Action
{
    public function run(Request $request): Bloguser
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateBloguserTask::class)->run($request->id, $data);
    }
}
