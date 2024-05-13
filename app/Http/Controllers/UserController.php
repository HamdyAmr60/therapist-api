<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function all(){
        $users = User::all();

        return UserResource::collection($users);
    }

    public function show($id){
        $user = User::findOrFail($id);

        return UserResource::make($user);
    }



    public function register(Request $request){
        $validate =   Validator::make($request->all(),[
              "name"=>"required|string",
              "email"=>"required|string",
              "password"=>"required|string",
              "birth_date"=>"required",
              "gender"=>"required",
              "phone"=>"required",
              "last_name"=>"required",
              "status"=>"string|required",
              "type"=>"string|required",

          ]);
  
          if($validate->fails()){
              return response()->json([
                  "error" =>$validate->errors(),
              ],301);
          }
          $password = bcrypt($request->password);
          $remmeber = Str::random(64);
          $randomNumber = random_int(1000, 9999);
          User::create([
              "name"=>$request->name,
              "email"=>$request->email,
              "password"=>$password,
              "birth_date"=>$request->birth_date,
              "status"=>$request->status,
              "gender"=>$request->gender,
              "phone"=>$request->phone,
              "last_name"=>$request->last_name,
              "verification_code"=> $randomNumber,
              "remember_token"=> Str::random(64),
              "type"=> $request->type,
          ]);
  
          return response()->json([
              "msg" => "registerd successfully",
              "remember_token"=>$remmeber,
              "verification" =>$randomNumber 
      ],200);
  
      }
  
      public function login(Request $request){
       $validate =   Validator::make($request->all(),[
              "email"=>"required",
              "password"=>"required",
          ]);
  
          if ($validate->fails()){
              return response()->json([
                  "msg"=>$validate->errors(),
              ]);
          }
  
          $user = User::where("email" , "=" , $request->email)->first();
          if($user !== null){
  
              
              $isgood =    Hash::check($request->password,$user->password);
              
              if ($isgood){
                  return response()->json([
                      "msg"=>"login good",
                      "access"=>$user->remember_token,
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
