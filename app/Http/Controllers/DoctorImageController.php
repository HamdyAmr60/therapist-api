<?php

namespace App\Http\Controllers;

use App\Http\Resources\DoctorImageResource;
use App\Models\Doctor_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DoctorImageController extends Controller
{
    public function all(){
        $doctorImages = Doctor_image::all();
    
        return DoctorImageResource::collection($doctorImages);
    }
    
    public function show($id){
        $doctorImage = Doctor_image::findOrFail($id);
    
        return DoctorImageResource::make($doctorImage);
    }
    
    public function add(Request $request){
        $validate =   Validator::make($request->all(),[
                      "doctor_id"=>"required",
                      "verifing_image"=>"required",
                      "personal_image"=>"required",
                  ]);
    
        $imagever =    Storage::putFile("images",$request->verifing_image);
        $personal =    Storage::putFile("images",$request->personal_image);
          
                  if($validate->fails()){
                      return response()->json([
                          "error" =>$validate->errors(),
                      ],301);
                  }
                  Doctor_image::create([
                      "doctor_id"=>$request->doctor_id,
                      "verifing_image"=>$imagever,
                      "personal_image"=>$personal,
                  ]);
          
                  return response()->json([
                      "msg" => "added successfully",
              ],200);
          
    }
    
    public function update(Request $request , $id){
                $validate =   Validator::make($request->all(),[
                    "doctor_id"=>"required",
                    "verifing_image"=>"required",
                    "personal_image"=>"required",
                  ]);
                  
                  if($validate->fails()){
                      return response()->json([
                          "error" =>$validate->errors(),
                        ],301);
                    }
                  $doctor =   Doctor_image::where("id",$id)->first();
                  if($doctor !== null){
                      $image = $doctor->verifing_image;
                      $personal = $doctor->personal_image;
                    
                }else{
                    return response()->json([
                        "msg" => "not found",
                ],404);
                }
                if ($request->hasFile('image')) {
                    // Delete the previous image
                    Storage::delete($image);
                    Storage::delete($personal);
                
                    // Store the new image
                    $imagever = Storage::putFile("images", $request->file('verifing_image'));
                    $personal = Storage::putFile("images", $request->file('personal_image'));
                }
                
                    $doctor->update([
                        "doctor_id"=>$request->doctor_id,
                        "verifing_image"=>$imagever,
                        "personal_image"=>$personal,
                  ]);
          
                  return response()->json([
                      "msg" => "updated successfully",
              ],200);
          
    }
    
    public function delete($id){
        $doctorImage = Doctor_image::where("id", $id)->first();
        if ($doctorImage !== null) {
            $doctorImage->delete($id);
            Storage::delete($doctorImage->verfing_image);
            Storage::delete($doctorImage->personal_image);
            return response()->json([
                "msg" => "deleted successfully",
            ], 200);
        } else {
            return response()->json([
                "msg" => "not found",
            ], 404);
        }
    }
    
}
