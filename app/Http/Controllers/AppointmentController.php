<?php

namespace App\Http\Controllers;

use App\Http\Resources\AppointmentResource;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function all(){
        $answer = Appointment::all();
    
        return AppointmentResource::collection($answer);
    }
    
    public function show($id){
        $appointment = Appointment::findOrFail($id);
    
        return AppointmentResource::make($appointment);
    }
    
    public function add(Request $request){
        $validate = Validator::make($request->all(), [
            "starts_at" => "required",
            "ends_at" => "required",
        ]);
    
        if ($validate->fails()) {
            return response()->json([
                "error" => $validate->errors(),
            ], 301);
        }
    
        Appointment::create([
            "starts_at" => $request->starts_at,
            "ends_at" => $request->ends_at,
        ]);
    
        return response()->json([
            "msg" => "added successfully",
        ], 200);
    }
    
    public function update(Request $request, $id){
        $validate = Validator::make($request->all(), [
            "starts_at" => "required",
            "ends_at" => "required",
        ]);
    
        if ($validate->fails()) {
            return response()->json([
                "error" => $validate->errors(),
            ], 301);
        }
    
        $appointment = Appointment::where("id", $id)->first();
        if ($appointment !== null) {
            $appointment->update([
                "starts_at" => $request->starts_at,
                "ends_at" => $request->ends_at,
            ]);
            return response()->json([
                "msg" => "updated successfully",
            ], 200);
        } else {
            return response()->json([
                "msg" => "not found",
            ], 404);
        }
    }
    
    public function delete($id){
        $appointment = Appointment::where("id", $id)->first();
        if ($appointment !== null) {
            $appointment->delete($id);
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
