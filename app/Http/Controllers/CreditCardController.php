<?php

namespace App\Http\Controllers;

use App\Http\Resources\CreditCardResource;
use App\Models\Credit_card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreditCardController extends Controller
{
    public function all(){
        $creditCards = Credit_card::all();
    
        return CreditCardResource::collection($creditCards);
    }
    
    public function show($id){
        $creditCard = Credit_card::findOrFail($id);
    
        return CreditCardResource::make($creditCard);
    }
    
    public function add(Request $request){
        $validate = Validator::make($request->all(), [
            "payment_method_id" => "required",
            "card_number" => "required",
            "cvv" => "required",
            "type" => "required",
            "expiration_date" => "required",
        ]);
    
        if ($validate->fails()) {
            return response()->json([
                "error" => $validate->errors(),
            ], 301);
        }
    
        Credit_card::create([
            "payment_method_id" => $request->payment_method_id,
            "card_number" => $request->card_number,
            "cvv" => $request->cvv,
            "type" => $request->type,
            "expiration_date" => $request->expiration_date,
        ]);
    
        return response()->json([
            "msg" => "added successfully",
        ], 200);
    }
    
    public function update(Request $request, $id){
        $validate = Validator::make($request->all(), [
            "payment_method_id" => "required",
            "card_number" => "required",
            "cvv" => "required",
            "type" => "required",
            "expiration_date" => "required",
        ]);
    
        if ($validate->fails()) {
            return response()->json([
                "error" => $validate->errors(),
            ], 301);
        }
    
        $creditCard = Credit_card::where("id", $id)->first();
        if ($creditCard !== null) {
            $creditCard->update([
                "payment_method_id" => $request->payment_method_id,
                "card_number" => $request->card_number,
                "cvv" => $request->cvv,
                "type" => $request->type,
                "expiration_date" => $request->expiration_date,
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
        $creditCard = Credit_card::where("id", $id)->first();
        if ($creditCard !== null) {
            $creditCard->delete($id);
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
