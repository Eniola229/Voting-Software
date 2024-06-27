<?php

namespace App\Http\Controllers\CAN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidates;  
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image; // Ensure you have this import

class AddCanController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'avatar' => ['nullable', 'image', 'max:2048'],
            'matricnumber' => ['nullable', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
        ]);

        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarFile = $request->file('avatar');
            $avatarSize = $avatarFile->getSize();

            // Check if the avatar exceeds 2MB
            if ($avatarSize > 2048000) { // 2MB in bytes
                // Resize the image to reduce file size
                $image = Image::make($avatarFile)->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // Store the resized avatar
                $avatarPath = $image->store('public/candidatesimages'); // Store the resized image
            } else {
                // Store Avatar is within 2MB size limit
                $avatarPath = $request->file('avatar')->store('public/candidatesimages');
            }
            $avatarPath = str_replace('public/', '', $avatarPath);
        }

        Candidates::create([
            'name' => $validated['name'],
            'avatar' => $avatarPath,
            'matricnumber' => $validated['matricnumber'],
            'position' => $validated['position'],
            'level' => $validated['level'],
        ]);

        return redirect()->back()->with('status', 'Candidate Added Successfully');
    }
}

