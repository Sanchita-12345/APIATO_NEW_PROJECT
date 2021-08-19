<?php

namespace App\Containers\AppSection\Admin\UI\API\Transformers;

use App\Containers\AppSection\Admin\Models\Admin;
use App\Ship\Parents\Transformers\Transformer;

class AdminTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform(Admin $admin)
    {
        $response = [
            // 'object' => $admin->getResourceKey(),
            // 'id' => $admin->getHashedKey(),
            // 'name' =>$admin->name,
            // 'email' =>$admin->email,
            // 'password' =>$admin->password,
            // 'birth' =>$admin->birth,
            // 'gender' => $admin->gender,
            // 'mobile' =>$admin->mobile,
            // 'created_at' => $admin->created_at,
            // 'updated_at' => $admin->updated_at,
            // 'readable_created_at' => $admin->created_at->diffForHumans(),
            // 'readable_updated_at' => $admin->updated_at->diffForHumans(),
            // return response()->json([
                'message'=>'Successfully Created admin'
            // ],201); 
        ];

        // $response = $this->ifAdmin([
        //     'real_id'    => $admin->id,
        //     // 'deleted_at' => $admin->deleted_at,
        // ], $response);

        return $response;
    }
}
