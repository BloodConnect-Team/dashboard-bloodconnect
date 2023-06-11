<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalMUController extends Controller
{
    public function index()
    {
        $data['title'] = 'MU Schedule';
        $data['jadwal'] = DB::table('jadwals')->get();
        return view('jadwalmu', compact('data'));
    }

    public function add(Request $request)
    {
        DB::table('jadwals')->insert([
            'instansi' => $request->instansi,
            'waktu' => $request->waktu,
            'target' => $request->target,
            'alamat' => $request->address,
        ]);
        return redirect()->route('jadwalmu')->with('success', "Schedule has been added successfully");
    }

    public function update(Request $request)
    {
        DB::table('jadwals')->where('id', $request->id)->update([
            'instansi' => $request->instansi,
            'waktu' => $request->waktu,
            'target' => $request->target,
            'alamat' => $request->address,
        ]);
        return redirect()->route('jadwalmu')->with('success','Schedule has been updated successfully');
    }

    public function delete($id)
    {
        DB::table('jadwals')->where('id', $id)->delete();
        return redirect()->route('jadwalmu')->with('success','Schedule has been deleted successfully');
    }
}
