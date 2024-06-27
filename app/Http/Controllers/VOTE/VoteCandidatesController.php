<?php

namespace App\Http\Controllers\VOTE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vote;  
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class VoteCandidatesController extends Controller
{
        public function store(Request $request): RedirectResponse {
        $validated = $request->validate([
            'matric' => ['required', 'string', 'max:255', 'unique:Vote,matric'],
            'presidential_candidate' => ['required', 'string', 'max:255'],
            'vice_presidential_candidate' => ['required', 'string', 'max:255'],
            'general_secetary' => ['required', 'string', 'max:255'],
            'ass_general_secetary' => ['required', 'string', 'max:255'],
            'treasurer' => ['required', 'string', 'max:255'],
            'welfare' => ['required', 'string', 'max:255'],
            'ass_welfare' => ['required', 'string', 'max:255'],
            'sport' => ['required', 'string', 'max:255'],
            'ass_sport' => ['required', 'string', 'max:255'],
            'social' => ['required', 'string', 'max:255'],
            'ass_social' => ['required', 'string', 'max:255'],
            'financial_sec' => ['required', 'string', 'max:255'],
            'pro' => ['required', 'string', 'max:255'],
            'env' => ['required', 'string', 'max:255'],
            'chief_whip' => ['required', 'string', 'max:255'],
            'startup' => ['required', 'string', 'max:255'],
            'ass_startup' => ['required', 'string', 'max:255'],
        ]);

        $app = Vote::create($validated);

        return redirect('/success');
    }
}