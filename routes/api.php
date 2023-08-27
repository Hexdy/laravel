<?php

use App\Http\Controllers\API\V_1\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Cada version debe tener una url única
//groups se usa para poder tener una ruta específica con un grupo de endpoints, sean, por ejemplo, customers o invoices o más

// API/V_1/<Endpoint>
Route::group(['prefix' => 'V_1', 'namespace' => 'App\Http\Controllers\API\V_1'], function () {
    Route::apiResource('customers', CustomerController::class); //Si no me equivoco ésto hará que al usar el endpoint 'customers' ejecutará el controlador de ésta, falta info
    Route::apiResource('invoices', CustomerController::class);
}); //La lógica es que como todos nuestros controladores de V_1 se encuentran en el mismo lugar podemos determinar namespace así
