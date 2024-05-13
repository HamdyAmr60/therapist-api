<?php

namespace App\Http\Controllers;

use App\Http\Resources\DiaryResource;
use App\Models\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DiaryController extends Controller
{
    public function all(){
    $diary =    Diary::all();

        return DiaryResource::collection($diary);
    }

    public function show($id){
        $diary =     Diary::findOrFail($id);
    
        return DiaryResource::make($diary);
        }
public function add(Request $request){
    $validate =   Validator::make($request->all(),[
                  "title"=>"required|string",
                  "content"=>"required|string",
                  "patient_id"=>"required",
              ]);

      
              if($validate->fails()){
                  return response()->json([
                      "error" =>$validate->errors(),
                  ],301);
              }
              Diary::create([
                  "title"=>$request->title,
                  "content"=>$request->content,
                  "patient_id"=>$request->patient_id,
              ]);
      
              return response()->json([
                  "msg" => "added successfully",
          ],200);
      
}

public function update(Request $request , $id){
            $validate =   Validator::make($request->all(),[
                "title"=>"required|string",
                  "content"=>"required|string",
                  "patient_id"=>"required",
              ]);
              
              if($validate->fails()){
                  return response()->json([
                      "error" =>$validate->errors(),
                    ],301);
                }
              $diary =   Diary::where("id",$id)->first();
              if($diary !== null){
                $diary->update([
                    "title"=>$request->title,
                    "content"=>$request->content,
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
           
              $diary =   Diary::where("id",$id)->first();
              if ($diary !==null){

                  $diary->delete($id);
                  return response()->json([
                      "msg" => "deleted successfully",
                    ],200);
              }else{
                return response()->json([
                    "msg" => "diary not found",
                  ],404);
              }
      
      
} 
}
