<?php

namespace App\Containers\AppSection\Bloguser\Actions;

use App\Containers\AppSection\Bloguser\Models\Bloguser;
use App\Containers\AppSection\Bloguser\Tasks\CreateBloguserTask;
use App\Containers\AppSection\Bloguser\UI\API\Requests\CreateBloguserRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateBloguserAction extends Action
{
    public function run(CreateBloguserRequest $request): Bloguser
    {
        $bloguser = app(CreateBloguserTask::class)->run(
            $request->name,
            $request->email,
            $request->password,
            $request->mobile
        );

        // return app(CreateBloguserTask::class)->run($data);
        return $bloguser;
    }
}
