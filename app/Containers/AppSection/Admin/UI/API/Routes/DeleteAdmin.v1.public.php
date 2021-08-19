<?php

/**
 * @apiGroup           Admin
 * @apiName            deleteAdmin
 *
 * @api                {DELETE} /v1/admins/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Admin\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('admins/{id}', [Controller::class, 'deleteAdmin'])
    ->name('api_admin_delete_admin')
    ->middleware(['auth:api']);

