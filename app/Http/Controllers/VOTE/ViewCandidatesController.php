<?php

namespace App\Http\Controllers\VOTE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidates; 

class ViewCandidatesController extends Controller
{
    public function show()
    {
        // Retrieve candidates for president position
        $presidents = Candidates::where('position', 'PRESIDENT')->get();
        $vice_presidents = Candidates::where('position', 'VICE PRESIDENT')->get();
        $general_secetarys = Candidates::where('position', 'GENERAL SECRETARY')->get();
        $ass_general_secetarys = Candidates::where('position', 'ASSISTANT GENERAL SECRETARY')->get();
        $treasurers = Candidates::where('position', 'TREASURER')->get();
        $welfares =Candidates::where('position', 'WELFARE DIRECTOR')->get();
        $ass_welfares =Candidates::where('position', 'ASSISTANT WELFARE')->get();
        $sports =Candidates::where('position', 'SPORT DIRECTOR')->get();
        $ass_sports =Candidates::where('position', 'ASSISTANT SPORT DIRECTOR')->get();
        $socials =Candidates::where('position', 'SOCIAL DIRECTOR')->get();
        $ass_social =Candidates::where('position', 'ASSISTANT SOCIAL DIRECTOR')->get();
        $financial_sec =Candidates::where('position', 'FINANCIAL SECRETARY')->get();
        $pro =Candidates::where('position', 'PUBLIC RELATION OFFICER')->get();
        $env =Candidates::where('position', 'ASSISTANT RELATION OFFICER')->get();
        $chief_whip =Candidates::where('position', 'CHIEF WHIP')->get();
        $startups =Candidates::where('position', 'START-UP DIRECTOR')->get();
        $ass_startups =Candidates::where('position', 'ASSISTANT START-UP DIRECTOR')->get();

        // Return the view with the presidents' details
        return view('votecandidate', compact('presidents', 'vice_presidents', 'general_secetarys', 'ass_general_secetarys', 'treasurers', 'welfares', 'ass_welfares', 'sports', 'ass_sports', 'socials', 'ass_social', 'financial_sec', 'pro', 'env', "chief_whip", 'startups', 'ass_startups'));
    }
}
