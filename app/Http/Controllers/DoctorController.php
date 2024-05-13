<?php

namespace App\Http\Controllers;

use App\Http\Resources\DoctorResource;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
  
    public function all(){
    $doctors =     Doctor::all();

    return DoctorResource::collection($doctors);
    }

    public function show($id){
        $doctor =     Doctor::findOrFail($id);
    
        return DoctorResource::make($doctor);
        }
    public function add(Request $request){
            $validate =   Validator::make($request->all(),[
                  "user_id"=>"required",
                  "specially"=>"required|string",
                  "activity_status"=>"required|string",
                  "image"=>"required|mimes:jpg;jpeg,png,gif",
                  "code"=>"required",
                  "rate"=>"required",
                  "connection_status"=>"required",
                  "licence_status"=>"string|required",
              ]);

           $image =    Storage::putFile("images",$request->image);
      
              if($validate->fails()){
                  return response()->json([
                      "error" =>$validate->errors(),
                  ],301);
              }
              Doctor::create([
                  "user_id"=>$request->user_id,
                  "specially"=>$request->specially,
                  "activity_status"=>$request->activity_status,
                  "image"=>$image,
                  "code"=>$request->code,
                  "rate"=>$request->rate,
                  "connection_status"=>$request->connection_status,
                  "licence_status"=>$request->licence_status,
              ]);
      
              return response()->json([
                  "msg" => "added successfully",
          ],200);
      
          }

    public function update(Request $request , $id){
        $validate =   Validator::make($request->all(),[
                  "user_id"=>"required",
                  "specially"=>"string|required",
                  "activity_status"=>"string|required",
                  "image"=>"",
                  "licence_status"=>"string|required",
              ]);
              
              if($validate->fails()){
                  return response()->json([
                      "error" =>$validate->errors(),
                    ],301);
                }
              $doctor =   Doctor::where("id",$id)->first();
              if($doctor !== null){
                  $image = $doctor->image;
                
            }else{
                return response()->json([
                    "msg" => "not found",
            ],404);
            }
            if ($request->hasFile('image')) {
                // Delete the previous image
                Storage::delete($image);
            
                // Store the new image
                $image = Storage::putFile("images", $request->file('image'));
            }
            
                $doctor->update([
                  "user_id"=>$request->user_id,
                  "specially"=>$request->specially,
                  "activity_status"=>$request->activity_status,
                  "image"=>$image,
                  "code"=>$request->code,
                  "rate"=>$request->rate,
                  "connection_status"=>$request->connection_status,
                  "licence_status"=>$request->licence_status,
              ]);
      
              return response()->json([
                  "msg" => "updated successfully",
          ],200);
      
          }
          

    public function delete($id){
              $doctor =   Doctor::where("id",$id)->first();
              if($doctor !== null){
                $doctor->delete($id);
                Storage::delete($doctor->image);
      
              return response()->json([
                  "msg" => "deleted successfully",
          ],200);
              }else{
                return response()->json([
                    "msg" => "doctor not found",
            ],404);
              }
          }
          
    }
