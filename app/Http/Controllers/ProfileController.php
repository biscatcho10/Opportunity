<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = auth()->user();
        $profile = $user->profile;
        return view('site.pages.profile', compact('user', 'profile'));
    }

    public function updateProfile(ProfileRequest $request)
    {

        $id = auth()->user()->id;
        User::find($id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name
        ]);

        if (!$request->has('tax_add'))
            $request->request->add(['tax_add' => 0]);
        else
            $request->request->add(['tax_add' => 1]);


        if (!$request->has('send_mail'))
            $request->request->add(['send_mail' => 0]);
        else
            $request->request->add(['send_mail' => 1]);


        $data = $request->except('_token', 'first_name', 'last_name', 'image');
        $fileName = "";
        if ($request->has('image')) {
            $fileName = uploadImage('users', $request->image);
        }

        $data['image'] = $fileName;

        Profile::create($data);

        return redirect()->route('signature.index')->with(['success' => 'Your Profile Updated Successfully']);



    }
}
