<?php

/**
 * @apiGroup           Bloguser
 * @apiName            createBloguser
 *
 * @api                {POST} /v1/blogusers Endpoint title here..
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

Route::post('createblogusers', [Controller::class, 'createBloguser']);
    // ->name('api_bloguser_create_bloguser')
    // ->middleware(['auth:api']);
Route::post('loginblogusers', [Controller::class, 'loginUser']);

