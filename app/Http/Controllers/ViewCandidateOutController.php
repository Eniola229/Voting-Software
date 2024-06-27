<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidates;

class ViewCandidateOutController extends Controller
{
     public function allcandidates(Request $request)
    {
        $cadidates = Candidates::all();
        
        return view('candidates', compact('cadidates'));
    }
}
 