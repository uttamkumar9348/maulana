<?php

/****************** PROSPECT MIDDLEWARE PAGES ROUTES START****************/
use App\Http\Controllers\frontwebuser\DashboardController;
use App\Http\Controllers\Frontwebuser\AuthController;

/*******************REGISTER ROUTE START*************/
// Route::group(['prefix' => 'frontwebuser', 'as' => 'frontwebuser.', 'middleware' => ['auth:user']], function () {
//     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// });
/****************** PROSPECT MIDDLEWARE PAGES ROUTES END****************/
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
?>
