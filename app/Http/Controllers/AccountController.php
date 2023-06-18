<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $data['title'] = 'Account';
        return view('account', compact('data'));
    }
}
