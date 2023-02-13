<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Daire;
use App\Models\Mudurluk;
use App\Models\Profile;
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
        return view('user.profile.edit', [
            'user' => $request->user(), 'profile'=> Profile::where('user_id',auth()->id())->first(),
            'mudurluks' => Mudurluk::all(), 'daires' => Daire::all()
        ]);
    }
    public function show($id): View
    {
        return view('user.profile.show', ['profile'=> Profile::where('user_id',auth()->id())->first()
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        $profile= Profile::where('user_id',auth()->id())->first();
        $profile->fname=$request->fname;
        $profile->lname=$request->lname;
        $profile->phone=$request->phone;
        $profile->daire_id=$request->daire_id;
        $profile->save();

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.show', $profile->id)->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
