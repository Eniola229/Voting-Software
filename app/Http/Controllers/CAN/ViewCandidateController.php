<?php

namespace App\Http\Controllers\CAN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidates;


class ViewCandidateController extends Controller
{
    public function allcandidates(Request $request)
    {
        $cadidates = Candidates::all();
        
        return view('viewcandidate', compact('cadidates'));
    }
}
 