<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AccountController extends Controller
{
    public function index()
    {
        $data['title'] = 'Account';
        return view('account', compact('data'));
    }

    public function edit()
    {
        $data['title'] = 'Account Edit';
        return view('account_edit', compact('data'));
    }

    public function update(Request $request)
    {    if(empty($request->image)){
            DB::table('users')->where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'goldar' => $request->goldar,
                'email' => $request->email,
                'hp' => $request->hp,
                'city' => $request->city,
            ]);
        }else{
            $imagePath = $request->file('image')->getRealPath();
            $result = Cloudinary::upload($imagePath,  ['folder' => 'bc/user']);
            $imageUrl = $result->getSecurePath();
            DB::table('users')->where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'goldar' => $request->goldar,
                'email' => $request->email,
                'hp' => $request->hp,
                'city' => $request->city,
                'photo' => $imageUrl,
            ]);
        }
        return redirect()->route('account')->with('success', "Account has been updated successfully");
    }

    public function password_change(Request $request){
        // dd(Hash::check($request->old_password, auth()->user()->password));
        if(!Hash::check($request->password_old, auth()->user()->password) ){
            return redirect()->route('account_edit')->with('error',"Old Password does not match!");
        }else{
            if($request->password_new != $request->repeat){
                return redirect()->route('account_edit')->with('error',"New Password is not same as repeat password!");
            }else{
                $profile = User::find(Auth::user()->id);
                $profile->password  = Hash::make($request->password_new);
                $profile->save();
            }
            return redirect()->route('account')->with('msg',"Password has been changed!, Please log in again !!");
        }
    }

}
