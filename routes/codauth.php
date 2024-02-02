<?php

use App\Http\Controllers\CodAuth\AuthenticatedSessionController;
use App\Http\Controllers\CodAuth\ConfirmablePasswordController;
use App\Http\Controllers\CodAuth\EmailVerificationNotificationController;
use App\Http\Controllers\CodAuth\EmailVerificationPromptController;
use App\Http\Controllers\CodAuth\NewPasswordController;
use App\Http\Controllers\CodAuth\PasswordController;
use App\Http\Controllers\CodAuth\PasswordResetLinkController;
use App\Http\Controllers\CodAuth\RegisteredUserController;
use App\Http\Controllers\CodAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:cod')->group(function () {
    Route::get('cod/register', [RegisteredUserController::class, 'create'])
                ->name('cod.register');

    Route::post('cod/register', [RegisteredUserController::class, 'store']);

    Route::get('cod/login', [AuthenticatedSessionController::class, 'create'])
                ->name('cod.login');

    Route::post('cod/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('cod/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('cod.password.request');

    Route::post('cod/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('cod.password.email');

    Route::get('cod/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('cod.password.reset');

    Route::post('cod/reset-password', [NewPasswordController::class, 'store'])
                ->name('cod.password.store');
});

Route::middleware('auth:cod')->group(function () {
    Route::get('cod/verify-email', EmailVerificationPromptController::class)
                ->name('cod.verification.notice');

    Route::get('cod/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('cod.verification.verify');

    Route::post('cod/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('cod.verification.send');

    Route::get('cod/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('cod.password.confirm');

    Route::post('cod/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('cod/password', [PasswordController::class, 'update'])->name('.password.update');

    Route::post('cod/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('cod.logout');
});
