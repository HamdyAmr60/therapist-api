<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaymentMethodResource;
use App\Models\payment_method;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentMethodController extends Controller
{
    public function all(){
        $methods = payment_method::all();
    
        return PaymentMethodResource::collection($methods);
    }
    
    public function show($id){
        $method = payment_method::findOrFail($id);
    
        return PaymentMethodResource::make($method);
    }
    
    public function add(Request $request){
        $validate = Validator::make($request->all(), [
            "method_name" => "required",
            "verified_at" => "required",
            "owner_name" => "required",
            "user_id" => "required",
        ]);
    
        if ($validate->fails()) {
            return response()->json([
                "error" => $validate->errors(),
            ], 301);
        }
    
        payment_method::create([
            "method_name" => $request->method_name,
            "verified_at" => $request->verified_at,
            "verification_code" => random_int(1000, 9999),
            "owner_name" => $request->owner_name,
            "user_id" => $request->user_id,
        ]);
    
        return response()->json([
            "msg" => "added successfully",
        ], 200);
    }
    
    public function update(Request $request, $id){
        $validate = Validator::make($request->all(), [
            "method_name" => "required",
            "verified_at" => "required",
            "owner_name" => "required",
            "user_id" => "required",
        ]);
    
        if ($validate->fails()) {
            return response()->json([
                "error" => $validate->errors(),
            ], 301);
        }
    
        $method = payment_method::where("id", $id)->first();
        if ($method !== null) {
            $method->update([
                "method_name" => $request->method_name,
                "verified_at" => $request->verified_at,
                "verification_code" => random_int(1000, 9999),
                "owner_name" => $request->owner_name,
                "user_id" => $request->user_id,
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
        $method = payment_method::where("id", $id)->first();
        if ($method !== null) {
            $method->delete($id);
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
