<?php

/**
 * @apiGroup           Blog
 * @apiName            updateBlog
 *
 * @api                {PATCH} /v1/blogs/:id Endpoint title here..
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

use App\Containers\AppSection\Blog\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('blogs/{id}', [Controller::class, 'updateBlog'])
    ->name('api_blog_update_blog')
    ->middleware(['auth:api']);

