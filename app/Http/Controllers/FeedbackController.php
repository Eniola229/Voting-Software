<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feedbacks;  
use Illuminate\Http\RedirectResponse;

class FeedbackController extends Controller
{
    //
        public function store(Request $request): RedirectResponse {
        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'max:255'],
            'choice' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        $app = Feedbacks::create($validated);

        return redirect()->back()->with('status', 'Feedback Send Succesfully');
    }
}
