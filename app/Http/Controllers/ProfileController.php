<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Image;
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
    {   //dd($request->user());
        $user = $request->user();
        return view('profile.editprofile', [
            'user' => $user,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        //dd($request['user_name']);

        $user = User::findOrFail($request['user_id']);
        $user->username = $request['user_name'];
        $user->email = $request['email'];
        $user->name = $request['first_name'].' '.$request['last_name'];
        $user->telegram = $request['telegram'];
        $user->job_title = $request['job'];
        $user->phone = $request['phone'];
        $user->organization = $request['organization'];
        $user->bio = $request['bio'];
        $user->website = $request['website'];
        $user->location = $request['location'];
        $user->is_enable_profile_anonymous = $request['is_enable_profile_anonymous'] == 'on' ? 1: 0;
        if ($request->hasFile('profile_image')) {
            if (!is_dir(public_path() . '/img/profiles')) ;
            {
                @mkdir(public_path() . '/img/profiles');
            }
            $targetPathImageProfile = public_path() . '/img/profiles';
            $targetBasePathImageProfile = 'img/profiles';
            $imagesOfProfile = $request->file('profile_image');
            $extension = $imagesOfProfile->getClientOriginalExtension();
//                dump($image);
            $imageName = pathinfo($imagesOfProfile->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
            $imagesOfProfile->move($targetPathImageProfile, $imageName);
            $image = new Image();
            $image->name = 'profile';
            $image->path = $targetBasePathImageProfile . DIRECTORY_SEPARATOR . $imageName;
            $imageSave = Image::create($image->toArray());
//            $campaign->image_thumbnail_path = $targetPathImageThumbnail.DIRECTORY_SEPARATOR.$imageName;
            $user->image_profile_path = $targetBasePathImageProfile . DIRECTORY_SEPARATOR . $imageName;
            $user->image_profile_id = $imageSave->id;
        }
//        dd($user->is_enable_profile_anonymous);
        $user->save();
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
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
