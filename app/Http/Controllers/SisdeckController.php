<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SisdeckController extends Controller
{
    public function __construct()
    {
        $this->middleware('sisdeck.auth');
    }

    public function index()
    {
        return view('/sisdeck/index');
    }
}
