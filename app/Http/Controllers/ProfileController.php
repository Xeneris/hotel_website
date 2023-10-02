<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class ProfileController extends Controller
{
    public function updateProfile(Request $request): string
    {
        $path = $request->file('avatar') == null ? null : $request->file('avatar')->store('avatars', 'public');

        $user = auth()->user();

//        if (isset($user->avatar)) {
//            Storage::disk('public')->delete($user->avatar);
//        }

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ]);
        if ($path != null) {
            $user->update([
                'avatar' => $path
            ]);
        }

        return back();
    }
}
