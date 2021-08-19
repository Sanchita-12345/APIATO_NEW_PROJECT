<?php

/**
 * @apiGroup           Blog
 * @apiName            createBlog
 *
 * @api                {POST} /v1/blogs Endpoint title here..
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

Route::post('blogs', [Controller::class, 'createBlog'])
    ->name('api_blog_create_blog')
    ->middleware(['auth:api']);

