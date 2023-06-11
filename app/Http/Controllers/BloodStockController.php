<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BloodStockController extends Controller
{
    public function index()
    {
        $data['title'] = 'Blood Stock';
        $data['stok'] = DB::table('stoks')->orderBy('created_at', 'desc')->get();
        return view('blood_stock', compact('data'));
    }

    public function add(Request $request)
    {
        DB::table('stoks')->insert([
            'created_at' => Carbon::now(),
            'a_pos' => $request->a_pos,
            'a_neg' => $request->a_neg,
            'b_pos' => $request->b_pos,
            'b_neg' => $request->b_neg,
            'ab_pos' => $request->ab_pos,
            'ab_neg' => $request->ab_neg,
            'o_pos' => $request->o_pos,
            'o_neg' => $request->o_neg,
        ]);
        return redirect()->route('bloodstock')->with('success', "Stock has been updated successfully");
    }
}
