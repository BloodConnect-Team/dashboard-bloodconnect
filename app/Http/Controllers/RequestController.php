<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function pending()
    {
        $data['title'] = 'Blood Requst';
        $data['req'] = DB::table('requests')
        ->join('bdrs', 'requests.bdrs_id', '=', 'bdrs.id_bdrs')
        ->join('users', 'requests.user_id', '=', 'users.id')
        ->where('requests_status', '=', '0')
        ->get();
        // dd($data['req'] );
        return view('pending', compact('data'));
    }

    public function show()
    {
        $data['title'] = 'Blood Requst';
        $data['req'] = DB::table('requests')
        ->join('bdrs', 'requests.bdrs_id', '=', 'bdrs.id_bdrs')
        ->join('users', 'requests.user_id', '=', 'users.id')
        ->where('requests_status', '=', '1')
        ->get();
        // dd($data['req'] );
        return view('show', compact('data'));
    }

    public function delete($id)
    {
        DB::table('requests')->where('id_requests', $id)->delete();
        return redirect()->back()->with('success','Request has been deleted successfully');
    }

    public function approve($id)
    {
        DB::table('requests')->where('id_requests', $id)->update([
            'requests_status' => '1',
        ]);
        return redirect()->back()->with('success','Request has been approved successfully');
    }
}
