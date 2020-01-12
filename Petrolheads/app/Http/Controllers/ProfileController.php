<?php

namespace App\Http\Controllers;


use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Http\Requests;
use App\Depress;
use App\Profile;
use Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $user = Auth::user();
        if (!Profile::where('user_id', '=', $user->id)->exists())
        return view('profiles.profile');
        else return redirect('/home')->with('alert', 'You already have a profile!');
    }

    public function addProfile(Request $request, Profile $profile)
    {

        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'profile_pic' => 'required',
        ]);
            $profiles = new Profile;
            $profiles->name = $request->input('name');
            $profiles->user_id = Auth::user()->id;
            $profiles->designation = $request->input('designation');

            if (Input::hasFile('profile_pic')) {
                $file = Input::file('profile_pic');
                $file->move(public_path() . '/uploads/', $file->getClientOriginalName());
                $url = URL::to("/") . '/uploads/' . $file->getClientOriginalName();
            }
            $profiles->profile_pic = $url;
            $profiles->save();
            return redirect('/home')->with('status', 'Profile Added Successfully!');
    }

    public function edit(Profile $profile)
    {
        $this->authorize('update', $profile);
        return view('profiles.edit', compact('profile'));
    }
    public function update(Profile $profile, Request $request)
    {


        $data = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'profile_pic',
        ]);
        if (Input::hasFile('profile_pic')) {
            $file = Input::file('profile_pic');
            $file->move(public_path() . '/uploads/', $file->getClientOriginalName());
            $url = URL::to("/") . '/uploads/'. $file->getClientOriginalName();
            $profile ->profile_pic = $url;
        }

        $profile->fill($data);
        $profile->save();
        return redirect('/home');
    }


}


