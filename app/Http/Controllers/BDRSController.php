<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BDRSController extends Controller
{
    public function index()
    {
        $data['title'] = 'BDRS';
        $data['bdrs'] = DB::table('bdrs')->get();
        return view('bdrs', compact('data'));
    }

    public function add(Request $request)
    {
        DB::table('bdrs')->insert([
            'bdrs_nama' => $request->name,
            'bdrs_kontak' => $request->hp,
            'bdrs_alamat' => $request->address,
            'bdrs_kota' => $request->kota,
            'bdrs_lat' => $request->lat,
            'bdrs_lng' => $request->lng

        ]);
        return redirect()->route('bdrs')->with('success', "BDRS has been added successfully");
    }

    public function update(Request $request)
    {
        DB::table('bdrs')->where('id_bdrs', $request->id)->update([
            'bdrs_nama' => $request->name,
            'bdrs_kontak' => $request->hp,
            'bdrs_alamat' => $request->address,
            'bdrs_kota' => $request->kota,
            'bdrs_lat' => $request->lat,
            'bdrs_lng' => $request->lng
        ]);
        return redirect()->route('bdrs')->with('success','Notes have been updated successfully');
    }

    public function delete($id)
    {
        DB::table('bdrs')->where('id_bdrs', $id)->delete();
        return redirect()->route('bdrs')->with('success','BDRS has been deleted successfully');
    }

}
