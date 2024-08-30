<?php

use App\Models\OurService;
use App\Models\ServiceSubcategory;
use Illuminate\Http\Request;
use App\Models\SisterConcern;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cat-wise-service-subcategory/{category_id}',function($category_id){
    return ServiceSubcategory::where('category_id',$category_id)->select('id','category_id','name')->get();
});

