<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;

class DashboardAntrianUmumController extends Controller
{
    public function index()
{
    $antrians = Antrian::where('poli', 'Poli Umum')->get();

    return view('dashboard.antrianumum', ['antrians' => $antrians]);
}
public function destroy($antrianId)
{
    try {
        // Find the Antrian based on ID
        $antrian = Antrian::findOrFail($antrianId);

        // Perform the deletion logic, for example:
        $antrian->delete();

        // Redirect with success message
        return redirect('/dashboard/antrian-poli-umum')->with('success', 'Antrian berhasil dihapus');
    } catch (\Exception $e) {
        // Handle the error if encountered, for example:
        return redirect('/dashboard/antrian-poli-umum')->with('error', 'Gagal menghapus antrian');
    }
}

}
