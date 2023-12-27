@extends('dashboard.layout.main')

@section('container')

<section class="pt-36 pb-32">
    <div class="container">
    <form class="max-w-sm mx-auto" action="/dashboard/dokter" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Upload Foto</label>
            <input name="image" id="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file">
        </div>
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Nama Dokter</label>
            <input name="nama_dokter" id="nama_dokter" type="text"  class="shadow-lg bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
        </div>
        <div class="col-span-2 sm:col-span-1 mb-5">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Poliklinik</label>
            <select name="poli_id" id="poli_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                <option value="" disabled selected hidden>Pilih Poli</option>
                <option value="1">Poli Umum</option>
                <option value="2">Poli Gigi</option>
                <option value="3">Poli THT</option>
            </select>
        </div>
            <button type="submit" class="text-base font-medium uppercase text-white bg-[#780000] py-3 px-5 rounded-full  hover:opacity-80 hover:shadow-lg transition duration-500 ">Tambah Data Dokter</button>
    </form>
    </div>
</section>

@endsection
