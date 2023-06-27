<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data['title'] = 'User';
        $data['user'] = DB::table('users')
        ->where('role', '=', '1')
        ->orwhere('role', '=', '0')
        ->get();
        return view('user', compact('data'));
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'role' => $request->role
        ]);
        return redirect()->route('user')->with('success','change role successfully');
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('user')->with('success','User has been deleted successfully');
    }
}
