<?php

namespace App\Http\Controllers\Profile;

use App\Helpers\ImagePath;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateProfileInformationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, User $user, ImagePath $image)
    {
        $request->validate([
            'photo' =>  'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,'. auth()->user()->id .',id'
        ]);

        if ($request->file('photo')) {
            Storage::disk('public')->delete($user->profile_photo_path);
            $user->update(['profile_photo_path' => $image->storeProfilePhoto($request->file('photo'))]);
        }
        $user->update($request->only('name', 'email'));
        return redirect()->route('profile.index')->with('success', 'Your information has been updated successfully');
    }

    public function deletePhoto(User $user)
    {
        $user->deleteProfilePhoto();
        return redirect()->route('profile.index')->with('success', 'Your profile photo has been removed successfully');
    }

    public function updatePassword(Request $request, User $user)
    {
        $request->validate([
            'current_password' => 'required|password',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);
        $user->update(['password' => bcrypt($request->password)]);
        return redirect()->route('profile.index')->with('success', 'Your password has been updated successfully');
    }
}
