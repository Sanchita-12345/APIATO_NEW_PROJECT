<?php

/**
 * @apiGroup           Bloguser
 * @apiName            updateBloguser
 *
 * @api                {PATCH} /v1/blogusers/:id Endpoint title here..
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

Route::patch('blogusers/{id}', [Controller::class, 'updateBloguser'])
    ->name('api_bloguser_update_bloguser')
    ->middleware(['auth:api']);

