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

    public function cetakDokter()
    {
        return view('dashboard.dokter.cetakdokter', [
            'dokters' => Dokter::get()
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
    public function search(Request $request){

        if($request->ajax()){
    
            $data=Dokter::where('id','like','%'.$request->search.'%')
            ->orwhere('nama_dokter','like','%'.$request->search.'%')
            ->orwhere('poli_id','like','%'.$request->search.'%')->get();
    
    
            $output='';
        if(count($data)>0){
                foreach ($data as $row) {
                    $output .= '
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                ' . $row->id . '
                            </td>
                            <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                ' . ($row->image ? '<img class="w-10 h-10 rounded-full" src="' . asset('storage/' . $row->image) . '" alt="dokter">' : '<img class="w-10 h-10 rounded-full" src="/img/user-photo.png">') . '
                            </td>
                            <td class="px-6 py-4">
                                ' . $row->nama_dokter . '
                            </td>
                            <td class="px-6 py-4">
                                ' . $row->polis->nama_poli . '
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="/dashboard/dokter/' . $row->id . '/edit">
                                        <button class="text-white border-yellow-200 bg-yellow-300 hover:bg-yellow-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center  dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                            <path fill="#ffffff"d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                        </svg>
                                            <span class="sr-only"></span>
                                        </button>
                                    </a>
                                    <form class="inline" action="/dashboard/dokter/' . $row->id . '" method="POST">
                                        ' . csrf_field() . '
                                        ' . method_field('delete') . '
                                        <button onclick="return confirm(\'apakah yakin ingin menghapus?\')" type="submit" class="text-white border-red-700 bg-red-600 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center  dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->\
                                                <path fill="#ffffff" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                                </svg>
                                            <span class="sr-only"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>';
                    }
            } else {
                $output .= '<tr><td colspan="5" class="text-center py-4" id="no_search_result">Tidak ada hasil pencarian.</td></tr>';
            }
    
            return $output;
        }
    
      }
    
}
