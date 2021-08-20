<?php

/**
 * @apiGroup           Blog
 * @apiName            deleteBlog
 *
 * @api                {DELETE} /v1/blogs/:id Endpoint title here..
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

Route::post('deleteblog', [Controller::class, 'deleteBlog']);
    // ->name('api_blog_delete_blog')
    // ->middleware(['auth:api']);

