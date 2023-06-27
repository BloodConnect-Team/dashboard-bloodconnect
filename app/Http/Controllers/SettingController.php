<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function index()
    {
        $data['title'] = 'Settings';
        $data['set'] = DB::table('settings')
        ->where('id', '=', '1')
        ->first();
        return view('setting', compact('data'));
    }

    public function update(Request $request)
    {
        DB::table('settings')->where('id', '1')->update([
            'playstore' => $request->playstore,
            'user_guide' => $request->userguide,
            'privacy_policy' => $request->privacypolicy
        ]);
        return redirect()->route('setting')->with('success','Setting has been updated successfully');
    }
}
