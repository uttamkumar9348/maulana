<?php

use App\Http\Controllers\Frontwebuser\DashboardController;
use App\Http\Controllers\Frontwebuser\DashbController;
use App\Http\Controllers\Frontwebuser\AuthController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'frontwebuser', 'as'=>'frontwebuser.','middleware' => 'auth:user','frontwebuser'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});

?>
