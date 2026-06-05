<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Livewire\Pages\Account\DashboardPage;
use App\Livewire\Pages\Account\SettingsPage;
use App\Livewire\Pages\Auth\ConfirmPasswordPage;
use App\Livewire\Pages\Auth\ForgotPasswordPage;
use App\Livewire\Pages\Auth\LoginPage;
use App\Livewire\Pages\Auth\RegisterPage;
use App\Livewire\Pages\Auth\ResetPasswordPage;
use App\Livewire\Pages\Auth\VerifyEmailPage;
use App\Livewire\Pages\Portal\AboutPage;
use App\Livewire\Pages\Portal\DocumentationPage;
use App\Livewire\Pages\Portal\IndexPage;
use App\Livewire\Pages\Portal\PartnersPage;
use App\Livewire\Pages\Portal\ProductsPage;
use App\Livewire\Pages\Portal\TechnicalSolutionsPage;
use Illuminate\Support\Facades\Route;


//region Auth Routes
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::middleware('guest')->group(function () {
    Route::get('register', RegisterPage::class)
        ->name('register');

    Route::get('login', LoginPage::class)
        ->name('login');

    Route::get('forgot-password', ForgotPasswordPage::class)
        ->name('password.request');

    Route::get('reset-password/{token}', ResetPasswordPage::class)
        ->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', VerifyEmailPage::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::get('confirm-password', ConfirmPasswordPage::class)
        ->name('password.confirm');
});
//endregion Auth


Route::get('/', IndexPage::class)->name('portal.index');
Route::get('/about', AboutPage::class)->name('portal.about');
Route::get('/documentation', DocumentationPage::class)->name('portal.documentation');
Route::get('/products', ProductsPage::class)->name('portal.products');
Route::get('/partners', PartnersPage::class)->name('portal.partners');
Route::get('/technical-solutions', TechnicalSolutionsPage::class)->name('portal.technical-solutions');

Route::middleware('auth')->prefix('account')->group(function () {
    Route::get('/', DashboardPage::class)->middleware(['auth', 'verified'])->name('account.dashboard');
    Route::get('settings', SettingsPage::class)->middleware(['auth', 'verified'])->name('account.settings');
});

