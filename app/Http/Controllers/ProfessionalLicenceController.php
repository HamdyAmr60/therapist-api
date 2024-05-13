<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProfessionalLicenceResource;
use App\Models\Professional_licence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfessionalLicenceController extends Controller
{
    public function all(){
        $licences = Professional_licence::all();
    
        return ProfessionalLicenceResource::collection($licences);
    }
    
    public function show($id){
        $licence = Professional_licence::findOrFail($id);
    
        return ProfessionalLicenceResource::make($licence);
    }
    
    public function add(Request $request){
        $validate =   Validator::make($request->all(),[
                      "doctor_id"=>"required",
                      "syndicate_card"=>"required",
                      "status"=>"required",
                      "verificated_at"=>"required",
                      "graduation_certificate"=>"required",
                      "id"=>"required"
                  ]);
    
        $card =    Storage::putFile("images",$request->syndicate_card);
        $graduation =    Storage::putFile("images",$request->graduation_certificate);
          
                  if($validate->fails()){
                      return response()->json([
                          "error" =>$validate->errors(),
                      ],301);
                  }
                  Professional_licence::create([
                    "doctor_id"=>$request->doctor_id,
                    "syndicate_card"=>$card,
                    "status"=>$request->status,
                    "verificated_at"=>$request->verificated_at,
                    "graduation_certificate"=>$graduation,
                    "id"=>$request->id
                  ]);
          
                  return response()->json([
                      "msg" => "added successfully",
              ],200);
          
    }
    
    public function update(Request $request , $id){
                $validate =   Validator::make($request->all(),[
                    "doctor_id"=>"required",
                    "syndicate_card"=>"required",
                    "status"=>"required",
                    "verificated_at"=>"required",
                    "graduation_certificate"=>"required",
                    "id"=>"required"
                  ]);
                  
                  if($validate->fails()){
                      return response()->json([
                          "error" =>$validate->errors(),
                        ],301);
                    }
                  $doctor =   Professional_licence::where("id",$id)->first();
                  if($doctor !== null){
                      $card = $doctor->syndicate_card;
                      $grad = $doctor->graduation_certificate;
                    
                }else{
                    return response()->json([
                        "msg" => "not found",
                ],404);
                }
                if ($request->hasFile('image')) {
                    // Delete the previous image
                    Storage::delete($card);
                    Storage::delete($grad);
                
                    // Store the new image
                    $card =    Storage::putFile("images",$request->syndicate_card);
                    $graduation =    Storage::putFile("images",$request->graduation_certificate);
                }
                
                    $doctor->update([
                        "doctor_id"=>$request->doctor_id,
                        "syndicate_card"=>$card,
                        "status"=>$request->status,
                        "verificated_at"=>$request->verificated_at,
                        "graduation_certificate"=>$graduation,
                        "id"=>$request->id
                  ]);
          
                  return response()->json([
                      "msg" => "updated successfully",
              ],200);
          
    }
    
    public function delete($id){
        $licence = Professional_licence::where("id", $id)->first();
        if ($licence !== null) {
            $licence->delete($id);
            Storage::delete($licence->syndicate_card);
            Storage::delete($licence->graduation_certificate);
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
