<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feedbacks;

class GetAllFeedbacksController extends Controller
{
     public function feedbacks(Request $request)
    {
        $feedbacks = Feedbacks::all();
        
        return view('dashboard', compact('feedbacks'));
    }
}
