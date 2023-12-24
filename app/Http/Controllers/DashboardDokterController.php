<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardDokterController extends Controller
{
    public function index()
    {
        return  view('dashboard.dokter');
    }
}
