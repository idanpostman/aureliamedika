<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardObatController extends Controller
{
    public function index(Request $request)
   {
    if($request->search != '') {
        $response = Http::get('https://api.fda.gov/drug/ndc.json?search='. $request->search .'');
         $data = $response->json();
        //  dd($data['results'][0]['generic_name'][0]['active_ingredients'][0]['strength']);
        // dd(array_keys($data)[0] == 'error');
        if(array_keys($data)[0] != 'error' ) {
            return view('dashboard.obat.index', [
                'obat' => $data['results'][0]['generic_name'],
                'komposisi' => $data['results'][0]['active_ingredients'][0]['strength']]);
        }else {
            return view('dashboard.obat.index', [
                'obat' => $data['error']['message'],
                'komposisi' => $data['error']['message']]);
        }
    }else {
        return view('dashboard.obat.index', ['obat' => []]);
    }
   }
}
