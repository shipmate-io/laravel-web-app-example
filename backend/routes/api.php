<?php

use App\Fibonacci;
use App\Users;
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

Route::get('/users', function (Request $request) {
    $n = $request->get('n', 200);

    $users = Users::new()->generate($n);

    return response()->json([
        'n' => $n,
        'users' => $users,
    ]);
});

Route::get('/fibonacci', function (Request $request) {
    $n = $request->get('n', 3);

    $result = Fibonacci::new()->calculate($n);

    return response()->json([
        'n' => $n,
        'result' => $result,
    ]);
});
