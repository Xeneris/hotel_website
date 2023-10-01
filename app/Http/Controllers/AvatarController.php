<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class AvatarController extends Controller
{
    public function update(Request $request): string
    {
        $path = $request->file('avatar')->store('avatars', 'public');

        $user = auth()->user();

        if (isset($user->avatar)) {
            Storage::disk('public')->delete($user->avatar);
        }

        $user->update([
            'avatar' => $path
        ]);

        return back();
    }
}
