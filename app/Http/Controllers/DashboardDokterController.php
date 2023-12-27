<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class DashboardDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dokter.index', [
            'dokters' => Dokter::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024',
            'nama_dokter' => 'required|max:255',
            'poli_id' => 'required',
    ]);

        // gambar pengecekan jika user tidak upload
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('dokter-images');
        }


        Dokter::create($validatedData);

        return redirect('/dashboard/dokter/');
    }


    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
        return view('dashboard.dokter.edit', [
            'dokter' => $dokter,
            'polis' => Poli::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        $rules = [
            'image' => 'image|file|max:1024',
            'nama_dokter' => 'required|max:255',
            'poli_id' => 'required',
        ];


        $validatedData = $request->validate($rules);

        if($request->file('image')) {
             if($request->oldImage) {
                Storage::delete($request->oldImage);
             }
            $validatedData['image'] = $request->file('image')->store('dokter-images');
        };



        Dokter::where('id', $dokter->id)
            ->update($validatedData);

        return redirect('/dashboard/dokter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        if($dokter->image) {
            Storage::delete($dokter->image);
         }
        Dokter::destroy($dokter->id);

        return redirect('/dashboard/dokter');
    }
}
