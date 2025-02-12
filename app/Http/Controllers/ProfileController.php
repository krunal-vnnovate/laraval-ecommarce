<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function edit($id)
    {
        // dd($id);
        $profileUp = User::find($id);
        // dd($profileUp);
        return view('profile.edit', compact('profileUp'));
    }

    public function update(Request $request, $id)
    {
        $ProfileUpdate = User::find($id);
        // dd($ProfileUpdate);

        $ProfileUpdate->name = $request->name;
        $ProfileUpdate->email = $request->email;
        $ProfileUpdate->profile_img = $request->profile_img;
        // dd($request->all()); 

        if ($ProfileUpdate->profile_img == '' || null) {
            if ($ProfileUpdate->save()) {
                return redirect()->route('admin.dashboard')->with('success', 'Record Updated Successfully!!');
            } else {
                echo "Record Can't be deleted!!";
            }
        } else {

            //Store-Updated Image

            $updatProfileImage = $request->all();

            if ($image = $request->file('profile_img')) {
                // dd($image);
                $profilePath = public_path('storage/adminprofile');
                $profileImageName = 'admin-' . date('YmdHis') . '.' . $image->getClientOriginalExtension();
                $image->move($profilePath, $profileImageName);
                $updatProfileImage['profile_img'] = 'storage/adminprofile/' . $profileImageName;
            }

            // dd($updatProfileImage);
            // dd($ProfileUpdate->profile_img = $updatProfileImage['profile_img']);

            //Passing image for store-update
            $ProfileUpdate->profile_img = $updatProfileImage['profile_img'];
            // $ProfileUpdate[]['profile_img']!=null;

            if ($ProfileUpdate->save()) {
                return redirect()->route('admin.dashboard')->with('success', 'Record Updated Successfully!!');
            } else {
                echo "Record Can't be deleted!!";
            }
        }
    }
}
