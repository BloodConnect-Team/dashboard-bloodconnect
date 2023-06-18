<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['title'] = 'Home';
        $data['stok'] = DB::table('stoks')->latest()->first();

        $data['pending'] = DB::table('requests')->where('requests_status','=','0')->count();
        $data['show'] = DB::table('requests')->where('requests_status','=','1')->count();
        $data['finish'] = DB::table('requests')->where('requests_status','=','2')->count();

        $data['a_pos'] = DB::table('requests')->where('requests_status','=','1')->where('requests_goldar','=','A+')->count();
        $data['b_pos'] = DB::table('requests')->where('requests_status','=','1')->where('requests_goldar','=','B+')->count();
        $data['ab_pos'] = DB::table('requests')->where('requests_status','=','1')->where('requests_goldar','=','AB+')->count();
        $data['o_pos'] = DB::table('requests')->where('requests_status','=','1')->where('requests_goldar','=','O+')->count();

        $data['a_neg'] = DB::table('requests')->where('requests_status','=','1')->where('requests_goldar','=','A-')->count();
        $data['b_neg'] = DB::table('requests')->where('requests_status','=','1')->where('requests_goldar','=','B-')->count();
        $data['ab_neg'] = DB::table('requests')->where('requests_status','=','1')->where('requests_goldar','=','AB-')->count();
        $data['o_neg'] = DB::table('requests')->where('requests_status','=','1')->where('requests_goldar','=','O-')->count();

        // dd($data);

        return view('home', compact('data'));
    }
}
