<?php

namespace App\Http\Controllers; 

use App\Models\RekamMedis;
use Illuminate\Http\Request;

class DashboardRekamMedisController extends Controller
{
    public function index()
    {
        // Mendapatkan semua data rekam medis
        $rekamMedis = RekamMedis::all();

        return view('dashboard.rekam_medis', compact('rekamMedis'));
    }

    public function tambahRekamMedis(Request $request)
    {
        // Contoh cara menghasilkan nomor rekam medis secara acak
        $noRekamMedis = 'RM' . rand(100, 999);

        // Simpan data ke dalam database
        RekamMedis::create([
            'nama' => $request->input('nama'),
            'nomor_antrian' => $request->input('nomor_antrian'),
            'poli' => $request->input('poli'),
            'no_rekam_medis' => $noRekamMedis,
            // tambahkan kolom lain yang dibutuhkan
        ]);

        return redirect()->back()->with('success', 'Rekam medis berhasil ditambahkan.');
    }

    public function hapusRekamMedis($id)
    {
        // Hapus rekam medis berdasarkan ID
        RekamMedis::find($id)->delete();

        return redirect()->back()->with('success', 'Rekam medis berhasil dihapus.');
    }
    public function edit($id)
    {
        // Fetch the record from the database based on the $id
        $rekam = RekamMedis::find($id);

        // Pass the record to the view for editing
        return view('dashboard.rekam_medis.edit', compact('rekam'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request, add more validation rules if needed
        $request->validate([
            'diagnosa' => 'required|string|max:255',
        ]);

        // Update the "Diagnosis" field only
        RekamMedis::where('id', $id)->update([
            'diagnosa' => $request->input('diagnosa'),
        ]);

        return redirect('/dashboard/rekam-medis')->with('success', 'Rekam medis berhasil diupdate.');
    }
}
