<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;

class DashboardAntrianThtController extends Controller
{
    public function index()
{
    $antrians = Antrian::where('poli', 'Poli THT')->get();

    return view('dashboard.antrianTHT', ['antrians' => $antrians]);
}
public function destroy($antrianId)
{
    try {
        // Find the Antrian based on ID
        $antrian = Antrian::findOrFail($antrianId);

        // Perform the deletion logic, for example:
        $antrian->delete();

        // Redirect with success message
        return redirect('/dashboard/antrian-poli-tht')->with('success', 'Antrian berhasil dihapus');
    } catch (\Exception $e) {
        // Handle the error if encountered, for example:
        return redirect('/dashboard/antrian-poli-tht')->with('error', 'Gagal menghapus antrian');
    }
}
}
