<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        if (isset($request->photo)) {
            $image=$request->name.time().'.webp';
            $compresor= CompressorController::profilCompresor($request->photo,$image);
            if ($compresor==true) {
                $user = User::find(Auth::user()->id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'Adresse'=>$request->Adresse,
                    'number'=>$request->number,
                    'image' => $image,
                ]);
            }
        }else{
            $user = User::find(Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'Adresse'=>$request->Adresse,
                'number'=>$request->number,
            ]);
        }
        return back();
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
