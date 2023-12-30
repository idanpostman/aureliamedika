<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardObatController extends Controller
{
    public function index()
   {
    return view('dashboard.obat');
   }
}
