@extends('layouts.main')

@section('container')

{{-- Perjalanan Start --}}
<section class="pt-36 w-full">
    <div class="container">
        <div class="gap-2 mx-auto lg:grid lg:grid-cols-2 pt-8 mb-4">
            <div>
                <img class="w-[450x] h-[300px] ml-16 rounded-lg shadow-xl lg:w-[550px] lg:h-[400px] " src="/img/about-us2.jpg" alt="">
            </div>
            <div class="ml-5">
                <h1 class="text-lg uppercase font-extrabold text-primary lg:text-4xl text-center mb-2">Perjalanan Kami</h1>
                <p class="text-lg mt-5 text-dark mx-4">Dengan hanya satu ruang periksa dan tim medis yang terdiri dari beberapa dokter umum dan perawat yang berdedikasi, Klinik Aurelia Medika didirikan pada tahun 1995 oleh
                </p>
                <p class="text-lg mb-7 text-dark mx-4"> <span class="text-secondary font-bold">Wildan Fauzan ST.</span>, seorang Programmer berpengalaman yang memiliki visi untuk menyediakan layanan kesehatan berkualitas tinggi dan holistik bagi masyarakat setempat. Dengan satu misi yang kuat untuk memberikan perawatan yang peduli dan menyeluruh, Klinik Aurelia Medika sejak itu telah menjadi tempat utama bagi pasien yang mencari perawatan kesehatan yang berfokus pada pasien.</p>
            </div>
        </div>
    </div>
</section>
{{-- Perjalanan  End --}}



{{-- Team Start --}}
<section class="pb-20 pt-16 ">
    <div class="w-full mt-11 mb-11 border-t border-slate-300 ">
    </div>
    <div class="flex-wrap items-center justify-center text-center">
        <h1 class="font-black text-4xl mb-2 text-primary">Aurelia Medika</h1>
        <p class="font-medium mt-5  text-secondary text-lg mx-4">Aplikasi berbasis web ini diajukan untuk memenuhi tugas besar mata kuliah Praktikum Web</p>
        <p class="font-medium  text-secondary text-lg mx-4">Berikut adalah anggota tim yang mengembangkan aplikasi ini</p>
        <div class="flex flex-wrap justify-center">
            <div class="mt-8 grid grid-cols-1 lg:grid lg:grid-cols-2 lg:gap-6">
                <div class="mb-4 ">
                    <img class="h-auto max-w-xs rounded-2xl" src="/img/idan.jpg" alt="">
                    <h1 class="font-black text-2xl mt-2 text-primary">Wildan Fauzan</h1>
                    <h4 class="italic text-gray-400">Project Manager</h4>
                        <p class="text-secondary font-semibold mb-2 italic">Full-Stack Developer</p>
                </div>
                <div class="mb-4">
                    <img class="h-auto max-w-xs rounded-2xl" src="/img/prim.jpg" alt="">
                    <h1 class="font-black text-2xl mt-2 text-primary">Moch. Priamitra Nur Alif</h1>
                    <h4 class="italic text-gray-400">Member</h4>
                        <p class="text-secondary font-semibold mb-2 italic">Back-End Developer</p>

                </div>
                <div class="mb-2">
                    <img class="h-auto max-w-xs rounded-2xl" src="/img/ahmad.jpg" alt="">
                    <h1 class="font-black text-2xl mt-2 text-primary">Ahmad Saeful Rahman</h1>
                    <h4 class="italic text-gray-400">Member</h4>
                        <p  class="text-secondary font-semibold mb-2 italic">Back-End Developer</p>
                </div>
                <div class="mb-2">
                    <img class="h-auto max-w-xs rounded-2xl" src="/img/diva.jpg" alt="">
                    <h1 class="font-black text-2xl mt-2 text-primary">Diva Nur Hafiffah</h1>
                    <h4 class="italic- text-gray-400">Member</h4>
                        <p  class="text-secondary font-semibold mb-2 italic">Front-End Developer</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Team End --}}

@endsection
