<?php

namespace App\Http\Controllers\CAN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidates; 

class EditCandidateController extends Controller
{
     public function show($id)
        {
            // Retrieve the user with the given ID
            $candidates = Candidates::find($id);

            // Check if user exists
            if (!$candidates) {
                return redirect()->back()->with('status', 'Candidate not found');
            }

            // Return the view with user and ecounter details
            return view('editcandidate', compact('candidates'));
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'matricnumber' => ['required', 'string', 'max:55'],
                'position' => ['nullable', 'string', 'max:255'],
                'level' => ['nullable', 'string', 'max:255'],
            ]);

            $user = Candidates::find($id);

            if ($user) {
                // Update user properties
                $user->name = $request->input('name');
                $user->matricnumber = $request->input('matricnumber');
                $user->position = $request->input('position');
                $user->level = $request->input('level');

                $user->save();

                return redirect()->back()->with('status', 'Candidate Updated Successfully');
            } else {
                return redirect()->back()->with('error', 'Candidate not found');
            }
        }

}
