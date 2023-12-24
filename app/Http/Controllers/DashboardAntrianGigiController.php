<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAntrianGigiController extends Controller
{
   public function index()
   {
    return view('dashboard.antriangigi');
   }
}
