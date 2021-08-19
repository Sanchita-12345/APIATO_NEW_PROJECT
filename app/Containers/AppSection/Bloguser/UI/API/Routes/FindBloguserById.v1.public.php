<?php

/**
 * @apiGroup           Bloguser
 * @apiName            findBloguserById
 *
 * @api                {GET} /v1/blogusers/:id Endpoint title here..
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

use App\Containers\AppSection\Bloguser\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('blogusers/{id}', [Controller::class, 'findBloguserById'])
    ->name('api_bloguser_find_bloguser_by_id')
    ->middleware(['auth:api']);

