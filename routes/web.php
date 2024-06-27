<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GetAllFeedbacksController;
use App\Http\Controllers\ViewCandidateOutController;
use App\Http\Controllers\CAN\AddCanController;
use App\Http\Controllers\CAN\ViewCandidateController;
use App\Http\Controllers\CAN\EditCandidateController;
use App\Http\Controllers\VOTE\ViewCandidatesController;
use App\Http\Controllers\VOTE\VoteCandidatesController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
    return view('welcome');
});
Route::get('/candidates', function () {
    return view('candidates');
});
Route::get('/votecandidate', function () {
    return view('votecandidate');
});
Route::get('/success', function () {
    return view('success');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/viewcandidate', function () {
    return view('viewcandidate');
})->middleware(['auth', 'verified'])->name('viewcandidate');

Route::get('/editcandidate', function () {
    return view('editcandidate');
})->middleware(['auth', 'verified'])->name('editcandidate');


Route::post('/feedback', [FeedbackController::class, 'store',])->name('feedback.store');
Route::get('/dashboard', [GetAllFeedbacksController::class, 'feedbacks',])->name('dashboard.show');
Route::get('/candidates', [ViewCandidateOutController::class, 'allcandidates',])->name('candidates.show');
Route::get('/votecandidate', [ViewCandidatesController::class, 'show',])->name('votecandidate.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::post('/candidate', [AddCanController::class, 'store',])->name('candidate.store');
    Route::get('/viewcandidate', [ViewCandidateController::class, 'allcandidates',])->name('viewcandidate.show');

    Route::get('/editcandidate/{id}', [EditCandidateController::class, 'show',])->name('editcandidate.show');
    Route::put('edituserdetails/{id}', [EditCandidateController::class, 'update'])->name('edituserdetails.update');

    Route::post('/vote', [VoteCandidatesController::class, 'store',])->name('vote.store');
});

require __DIR__.'/auth.php';
