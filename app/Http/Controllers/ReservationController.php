<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReservationResource;
use App\Models\Question;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function all(){
        $questions =     Reservation::all();
    
        return ReservationResource::collection($questions);
        }
    
        public function show($id){
            $question =     Reservation::findOrFail($id);
        
            return ReservationResource::make($question);
            }
        public function add(Request $request){
                $validate =   Validator::make($request->all(),[
                      "doctor_id"=>"required",
                      "session_started_at"=>"required|date",
                      "session_ended_at"=>"required|date",
                      "price"=>"required",
                      "type"=>"required",
                      "patient_id"=>"required",
                  ]);
    
          
                  if($validate->fails()){
                      return response()->json([
                          "error" =>$validate->errors(),
                      ],301);
                  }
                  Reservation::create([
                    "doctor_id"=>$request->doctor_id,
                    "session_started_at"=>$request->session_started_at,
                    "session_ended_at"=>$request->session_ended_at,
                    "price"=>$request->price,
                    "type"=>$request->type,
                    "patient_id"=>$request->patient_id,
                  ]);
          
                  return response()->json([
                      "msg" => "added successfully",
              ],200);
          
              }
    
        public function update(Request $request , $id){
            $validate =   Validator::make($request->all(),[
                "doctor_id"=>"required",
                "session_started_at"=>"required|date",
                "session_ended_at"=>"required|date",
                "price"=>"required",
                "type"=>"required",
                "patient_id"=>"required",
                  ]);
                  
                  if($validate->fails()){
                      return response()->json([
                          "error" =>$validate->errors(),
                        ],301);
                    }
                  $reservation =   Reservation::where("id",$id)->first();
                  if($reservation !== null){

                    $reservation->update([
                        "doctor_id"=>$request->doctor_id,
                        "session_started_at"=>$request->session_started_at,
                        "session_ended_at"=>$request->session_ended_at,
                        "price"=>$request->price,
                        "type"=>$request->type,
                        "patient_id"=>$request->patient_id,
                    ]);
            
                    return response()->json([
                        "msg" => "updated successfully",
                ],200);
                    
                }else{
                    return response()->json([
                        "msg" => "not found",
                ],404);
                }
                
          
              }
              
    
              public function delete($id){
                $reservation =   Reservation::where("id",$id)->first();
                if($reservation !== null){
                  $reservation->delete($id);
        
                return response()->json([
                    "msg" => "deleted successfully",
            ],200);
                }else{
                  return response()->json([
                      "msg" => " not found",
              ],404);
                }
            }
}
