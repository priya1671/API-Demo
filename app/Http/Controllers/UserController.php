<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Hash;
class UserController extends Controller
{
    //
    public function signup(UserRequest $validate)
    {
        $input = request()->all();
        $input["password"]=Hash::make(request("password"));
        User::create($input);
        return response()->json(["Success"=>"True","HTTP_CODE"=>"201","Message"=>"Registred Sucessfully"]);
   
    }

}
