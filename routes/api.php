<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CreditCardController;
use App\Http\Controllers\DiagnosiController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorImageController;
use App\Http\Controllers\DoctorsAppointmentController;
use App\Http\Controllers\ElectronicWalletController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PaymentTransactionController;
use App\Http\Controllers\ProfessionalLicenceController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RequiredTestController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(AdminController::class)->group(function (){
    Route::post("registerAdmin" , "register");
    Route::post("loginAdmin" , "login");
});

Route::controller(DoctorController::class)->group(function (){
    Route::get("doctors" , "all");
    Route::get("doctors/show/{id}" , "show");
    Route::post("doctor/add" , "add");
    Route::put("doctor/update/{id}" , "update");
    Route::delete("doctor/delete/{id}" , "delete");

});

Route::controller(UserController::class)->group(function (){
    Route::get("users" , "all");
    Route::get("user/show/{id}" , "show");
    Route::post("register" , "register");
    Route::post("login" , "login");
});

Route::controller(PatientController::class)->group(function (){
    Route::get("patients" , "all");
    Route::get("patient/show/{id}" , "show");
    Route::post("patient/add" , "add");
    Route::put("patient/update/{id}" , "update");
    Route::delete("patient/delete/{id}" , "delete");

});

Route::controller(DiaryController::class)->group(function (){
    Route::get("diary" , "all");
    Route::get("diary/show/{id}" , "show");
    Route::post("diary/add" , "add");
    Route::put("diary/update/{id}" , "update");
    Route::delete("diary/delete/{id}" , "delete");

});



Route::controller(QuestionController::class)->group(function (){
    Route::get("question" , "all");
    Route::get("question/show/{id}" , "show");
    Route::post("question/add" , "add");
    Route::put("question/update/{id}" , "update");
    Route::delete("question/delete/{id}" , "delete");
});


Route::controller(ReservationController::class)->group(function (){
    Route::get("reservation" , "all");
    Route::get("reservation/show/{id}" , "show");
    Route::post("reservation/add" , "add");
    Route::put("reservation/update/{id}" , "update");
    Route::delete("reservation/delete/{id}" , "delete");
});

Route::controller(AnswerController::class)->group(function (){
    Route::get("answer" , "all");
    Route::get("answer/show/{id}" , "show");
    Route::post("answer/add" , "add");
    Route::put("answer/update/{id}" , "update");
    Route::delete("answer/delete/{id}" , "delete");
});

Route::controller(DiagnosiController::class)->group(function (){
    Route::get("diagnosi" , "all");
    Route::get("diagnosi/show/{id}" , "show");
    Route::post("diagnosi/add" , "add");
    Route::put("diagnosi/update/{id}" , "update");
    Route::delete("diagnosi/delete/{id}" , "delete");
});

Route::controller(ReportController::class)->group(function (){
    Route::get("report" , "all");
    Route::get("report/show/{id}" , "show");
    Route::post("report/add" , "add");
    Route::put("report/update/{id}" , "update");
    Route::delete("report/delete/{id}" , "delete");
});

Route::controller(RequiredTestController::class)->group(function (){
    Route::get("test" , "all");
    Route::get("test/show/{id}" , "show");
    Route::post("test/add" , "add");
    Route::put("test/update/{id}" , "update");
    Route::delete("test/delete/{id}" , "delete");
});


Route::controller(ReviewController::class)->group(function (){
    Route::get("review" , "all");
    Route::get("review/show/{id}" , "show");
    Route::post("review/add" , "add");
    Route::put("review/update/{id}" , "update");
    Route::delete("review/delete/{id}" , "delete");
});
Route::controller(DoctorsAppointmentController::class)->group(function (){
    Route::get("doctorapp" , "all");
    Route::get("doctorapp/show/{id}" , "show");
    Route::post("doctorapp/add" , "add");
    Route::put("doctorapp/update/{id}" , "update");
    Route::delete("doctorapp/delete/{id}" , "delete");
});

Route::controller(AppointmentController::class)->group(function (){
    Route::get("app" , "all");
    Route::get("app/show/{id}" , "show");
    Route::post("app/add" , "add");
    Route::put("app/update/{id}" , "update");
    Route::delete("app/delete/{id}" , "delete");
});

Route::controller(ElectronicWalletController::class)->group(function (){
    Route::get("wallet" , "all");
    Route::get("wallet/show/{id}" , "show");
    Route::post("wallet/add" , "add");
    Route::put("wallet/update/{id}" , "update");
    Route::delete("wallet/delete/{id}" , "delete");
});
Route::controller(PaymentMethodController::class)->group(function (){
    Route::get("method" , "all");
    Route::get("method/show/{id}" , "show");
    Route::post("method/add" , "add");
    Route::put("method/update/{id}" , "update");
    Route::delete("method/delete/{id}" , "delete");
});

Route::controller(CreditCardController::class)->group(function (){
    Route::get("card" , "all");
    Route::get("card/show/{id}" , "show");
    Route::post("card/add" , "add");
    Route::put("card/update/{id}" , "update");
    Route::delete("card/delete/{id}" , "delete");
});

Route::controller(PaymentTransactionController::class)->group(function (){
    Route::get("transaction" , "all");
    Route::get("transaction/show/{id}" , "show");
    Route::post("transaction/add" , "add");
    Route::put("transaction/update/{id}" , "update");
    Route::delete("transaction/delete/{id}" , "delete");
});

Route::controller(DoctorImageController::class)->group(function (){
    Route::get("doctorimage" , "all");
    Route::get("doctorimage/show/{id}" , "show");
    Route::post("doctorimage/add" , "add");
    Route::put("doctorimage/update/{id}" , "update");
    Route::delete("doctorimage/delete/{id}" , "delete");
});

Route::controller(ProfessionalLicenceController::class)->group(function (){
    Route::get("Licence" , "all");
    Route::get("Licence/show/{id}" , "show");
    Route::post("Licence/add" , "add");
    Route::put("Licence/update/{id}" , "update");
    Route::delete("Licence/delete/{id}" , "delete");
});