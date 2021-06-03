<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;



Route::group([], function() {
	Route::post('register/getDataByID', [RegisterController::class, 'getDataById']);
	Route::post('register/getData', [RegisterController::class, 'lists']);
	Route::post('register/action', [RegisterController::class, 'action']);
	Route::post('register/delete', [RegisterController::class, 'delete']);
	Route::post('register/fileupload', [RegisterController::class, 'fileupload']);
});