<?php

namespace App\Containers\AppSection\Admin\UI\API\Controllers;

use App\Containers\AppSection\Admin\Actions\AdminloginAction;
use App\Containers\AppSection\Admin\UI\API\Requests\CreateAdminRequest;
use App\Containers\AppSection\Admin\UI\API\Requests\DeleteAdminRequest;
use App\Containers\AppSection\Admin\UI\API\Requests\GetAllAdminsRequest;
use App\Containers\AppSection\Admin\UI\API\Requests\FindAdminByIdRequest;
use App\Containers\AppSection\Admin\UI\API\Requests\UpdateAdminRequest;
use App\Containers\AppSection\Admin\UI\API\Transformers\AdminTransformer;
use App\Containers\AppSection\Admin\Actions\CreateAdminAction;
use App\Containers\AppSection\Admin\Actions\FindAdminByIdAction;
use App\Containers\AppSection\Admin\Actions\GetAllAdminsAction;
use App\Containers\AppSection\Admin\Actions\UpdateAdminAction;
use App\Containers\AppSection\Admin\Actions\DeleteAdminAction;
use App\Containers\AppSection\Admin\UI\API\Requests\AdminloginRequest;
use App\Containers\AppSection\Admin\UI\API\Transformers\AdminloginTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createAdmin(CreateAdminRequest $request): JsonResponse
    {
        // $admin = $request->all();
        $admin = app(CreateAdminAction::class)->run($request);
        return $this->created($this->transform($admin, AdminTransformer::class));
    }

    public function loginAdmin(AdminloginRequest $request): JsonResponse
    {
        // $admin = $request->all();
        $admin = app(AdminloginAction::class)->run($request);
        return $this->created($this->transform($admin, AdminloginTransformer::class));
    }

    public function findAdminById(FindAdminByIdRequest $request): array
    {
        $admin = app(FindAdminByIdAction::class)->run($request);
        return $this->transform($admin, AdminTransformer::class);
    }

    public function getAllAdmins(GetAllAdminsRequest $request): array
    {
        $admins = app(GetAllAdminsAction::class)->run($request);
        return $this->transform($admins, AdminTransformer::class);
    }

    public function updateAdmin(UpdateAdminRequest $request): array
    {
        $admin = app(UpdateAdminAction::class)->run($request);
        return $this->transform($admin, AdminTransformer::class);
    }

    public function deleteAdmin(DeleteAdminRequest $request): JsonResponse
    {
        app(DeleteAdminAction::class)->run($request);
        return $this->noContent();
    }
}
