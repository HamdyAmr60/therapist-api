<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{


    public function register(Request $request){
      $validate =   Validator::make($request->all(),[
            "name"=>"required|string",
            "email"=>"required|string",
            "password"=>"required|string",
            "role"=>"required",
            "status"=>"string|required",
        ]);

        if($validate->fails()){
            return response()->json([
                "error" =>$validate->errors(),
            ],301);
        }
        $password = bcrypt($request->password);

        Admin::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$password,
            "role"=>$request->role,
            "status"=>$request->status,
        ]);

        return response()->json([
            "msg" => "registerd successfully"
    ],200);

    }

    public function login(Request $request){
     $validate =    validator::make($request->all(),[
            "email"=>"required",
            "password"=>"required",
        ]);

        if ($validate->fails()){
            return response()->json([
                "msg"=>$validate->errors(),
            ]);
        }

        $admin = Admin::where("email" , "=" , $request->email)->first();
        if($admin !== null){

            
            $isgood =    Hash::check($request->password,$admin->password);
            
            if ($isgood){
                return response()->json([
                    "msg"=>"login good"
                ],200);
            }else{
                return response()->json([
                    "msg"=>"login failed"
                ],404);
            }
        }else{
            return response()->json([
                "msg"=>"user not found"
            ],404);
        }
    }
}
