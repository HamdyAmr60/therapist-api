<?php

namespace App\Http\Controllers;

use App\Http\Resources\DoctorsAppointmentResource;
use App\Models\Doctors_appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorsAppointmentController extends Controller
{
    public function all(){
        $appointments = Doctors_appointment::all();
    
        return DoctorsAppointmentResource::collection($appointments);
    }
    
    public function show($id){
        $appointment = Doctors_appointment::findOrFail($id);
    
        return DoctorsAppointmentResource::make($appointment);
    }
    
    public function add(Request $request){
        $validate = Validator::make($request->all(), [
            "doctor_id" => "required",
            "appointment_id" => "required",
            "status" => "required",
        ]);
    
        if ($validate->fails()) {
            return response()->json([
                "error" => $validate->errors(),
            ], 301);
        }
    
        Doctors_appointment::create([
            "doctor_id" => $request->doctor_id,
            "appointment_id" => $request->appointment_id,
            "status" => $request->status,
        ]);
    
        return response()->json([
            "msg" => "added successfully",
        ], 200);
    }
    
    public function update(Request $request, $id){
        $validate = Validator::make($request->all(), [
            "doctor_id" => "required",
            "appointment_id" => "required",
            "status" => "required",
        ]);
    
        if ($validate->fails()) {
            return response()->json([
                "error" => $validate->errors(),
            ], 301);
        }
    
        $appointment = Doctors_appointment::where("id", $id)->first();
        if ($appointment !== null) {
            $appointment->update([
                "doctor_id" => $request->doctor_id,
                "appointment_id" => $request->appointment_id,
                "status" => $request->status,
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
        $appointment = Doctors_appointment::where("id", $id)->first();
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
