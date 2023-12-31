<?php

namespace App\Http\Controllers;

use App\Events\QueueDeleted;
use App\Events\QueueUpdated;
use App\Models\Antrian;
use App\Models\Poli;
use App\Models\RekamMedis;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Mpdf\Mpdf;
use Pusher\Pusher;


class AntrianController extends Controller
{
    public function index()
    {
        $polis = Poli::all(); // Gantilah dengan model dan kolom yang sesuai
        return view('antrian', compact('polis'));
    }
    public function __construct()
    {
    $this->middleware('auth'); // Hanya pengguna yang sudah login dapat mengakses method di controller ini
    }
    public function submitAntrian(Request $request, Antrian $antrian)
        {
            try{
             // Validasi input form
            $request->validate([
            'poli' => 'required|string|max:255',
            ]);
            
            // Ambil nama pengguna yang sedang login
             $nama = Auth::user()->name;

              // Check if the user already has an existing queue
                $existingQueue = Antrian::where('nama', $nama)->first();
                if ($existingQueue) {
                    return redirect('/antrian')->with('error', 'Anda sudah memiliki antrian.');
                }

                // Tentukan kode poli berdasarkan pilihan user
            $kodePoli = '';
            switch ($request->input('poli')) {
                case 'Poli Gigi':
                    $kodePoli = 'PG';
                    break;
                case 'Poli THT':
                    $kodePoli = 'PT';
                    break;
                case 'Poli Umum':
                    $kodePoli = 'PU';
                    break;
                // Tambahkan kasus lainnya jika diperlukan
            }
    
            // Ambil nomor antrian untuk poli yang dipilih
            $nomorAntrian = Antrian::where('poli', $request->input('poli'))->max('nomor_antrian');
    
            // Jika tidak ada nomor antrian sebelumnya, beri nilai awal 1
            $nomorAntrian = $nomorAntrian ? $nomorAntrian + 1 : 1;
    
            // Simpan data antrian ke database
            $antrian = new Antrian;
            $antrian->nama = $nama;
            $antrian->poli = $request->input('poli');
            $antrian->no_telp = $request->input('no_telp');
            $antrian->kode_poli = $kodePoli;
            $antrian->nomor_antrian = $nomorAntrian;
            $antrian->save();
            // Redirect kembali ke halaman formulir dengan pesan sukses
            return redirect('/antrian')->with('success', 'Antrian berhasil disubmit');
            } catch (\Exception $e) {
            // Tampilkan pesan kesalahan untuk debugging
            dd($e->getMessage());
            }
        }
        public function getAntrian(Request $request)
{
    $nama = $request->input('nama');
    $antrian = Antrian::where('nama', $nama)->first();

    return response()->json([
        'nomor_antrian' => $antrian->nomor_antrian,
        'nama_poli' => $antrian->poli,
        'nama' => $antrian->nama,  // Include the user's name in the response
    ]);
}
public function generatePDF(Request $request)
{
    $nama = $request->input('nama');
    $nomorAntrian = $request->input('nomor_antrian');
    $namaPoli = $request->input('nama_poli');

    $mpdf = new Mpdf();
    $mpdf->WriteHTML("<h1>Detail Antrian</h1>");
    $mpdf->WriteHTML("<p>Nama: $nama</p>");
    $mpdf->WriteHTML("<p>Nomor Antrian: $nomorAntrian</p>");
    $mpdf->WriteHTML("<p>Poli: $namaPoli</p>");

    $mpdf->Output();
}
public function create()
    {
        $polis = Poli::all(); // Gantilah dengan model dan kolom yang sesuai
        return view('dashboard.antrian.create', compact('polis'));
        
    }


    public function storepu(Request $request)
    {
        {
            try{
             // Validasi input form
            $request->validate([
            'poli' => 'required|string|max:255',
            ]);

                // Tentukan kode poli berdasarkan pilihan user
            $kodePoli = '';
            switch ($request->input('poli')) {
                case 'Poli Gigi':
                    $kodePoli = 'PG';
                    break;
                case 'Poli THT':
                    $kodePoli = 'PT';
                    break;
                case 'Poli Umum':
                    $kodePoli = 'PU';
                    break;
                // Tambahkan kasus lainnya jika diperlukan
            }
    
            // Ambil nomor antrian untuk poli yang dipilih
            $nomorAntrian = Antrian::where('poli', $request->input('poli'))->max('nomor_antrian');
    
            // Jika tidak ada nomor antrian sebelumnya, beri nilai awal 1
            $nomorAntrian = $nomorAntrian ? $nomorAntrian + 1 : 1;
    
            // Simpan data antrian ke database
            $antrian = new Antrian;
            $antrian->nama = $request->input('nama');
            $antrian->poli = $request->input('poli');
            $antrian->no_telp = $request->input('no_telp');
            $antrian->kode_poli = $kodePoli;
            $antrian->nomor_antrian = $nomorAntrian;
            $antrian->save();
            // Redirect kembali ke halaman formulir dengan pesan sukses
            return redirect('/dashboard/antrian-poli-umum')->with('success', 'Antrian berhasil disubmit');
            } catch (\Exception $e) {
            // Tampilkan pesan kesalahan untuk debugging
            dd($e->getMessage());
            }
    }
}

public function moveDataToRekamMedis($antrianId) {
    // Temukan data antrian berdasarkan ID
    $antrian = Antrian::find($antrianId);

    // Buat data rekam medis baru
    $rekamMedis = new RekamMedis();
    $rekamMedis->nama = $antrian->nama;
    $rekamMedis->no_telpon = $antrian->no_telp;
    $rekamMedis->poli = $antrian->poli;
    $rekamMedis->no_rekam_medis = $antrian->no_rekam_medis;
    // Tambahkan kolom-kolom lain sesuai kebutuhan

    // Simpan rekam medis ke database
    $rekamMedis->save();

    // Hapus data antrian dari tabel antrian
    $antrian->delete();

    return redirect('/dashboard/rekam-medis')->with('success', 'Data berhasil dipindahkan ke rekam medis.');
}
}