<?php

/**
 * @apiGroup           Bloguser
 * @apiName            deleteBloguser
 *
 * @api                {DELETE} /v1/blogusers/:id Endpoint title here..
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

Route::delete('blogusers/{id}', [Controller::class, 'deleteBloguser'])
    ->name('api_bloguser_delete_bloguser')
    ->middleware(['auth:api']);

