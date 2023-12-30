<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardRekamMedisController extends Controller
{
    public function index()
    {
     return view('dashboard.rekam_medis');
    }
}
