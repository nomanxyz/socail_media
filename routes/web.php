<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FollowingController, TweetController, StatusController, ProfileInformationController};

Route::redirect('/', '/login');

Route::middleware('auth')->group(function () {
    Route::get('/tweets', TweetController::class)->name('tweets');
    Route::post('/tweets/store', [StatusController::class, 'store'])->name('tweets.store');

    Route::get('profile/{user}/following', [FollowingController::class, 'following'])->name('profile.following');
    Route::get('profile/{user}/follower', [FollowingController::class, 'follower'])->name('profile.follower');
    Route::get('/profile/{user}', ProfileInformationController::class)->name('profile');
});

require __DIR__.'/auth.php';
