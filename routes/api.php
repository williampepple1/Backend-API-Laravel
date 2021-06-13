<?php
use App\Http\Controllers\{AuthController, UserController};
use Illuminate\Http\Request;
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

//Public Routes
// Route::resource('/profiles', ProfileController::class); 
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);




// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('/fetch', [ UserController::class, 'get' ]);
    Route::put('/update', [ UserController::class, 'update' ]);
    Route::delete('/delete', [ UserController::class, 'delete' ]);
    Route::post('/logout', [AuthController::class, 'logout']);
});
