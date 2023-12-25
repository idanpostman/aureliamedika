<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAntrianUmumController extends Controller
{
    public function index()
   {
    return view('dashboard.antrianumum');
   }
}
