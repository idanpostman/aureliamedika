@extends('layouts.mainlogin')

@section('container')

<section class="pt-12">
    <div class="container mx-auto">
            <div class="flex flex-col items-center justify-center">
                <img src="./img/logo-merah.png" width="320px" alt="">
            </div>
        <div class="flex flex-wrap items-center justify-center">
            <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14">
                @if(session()->has('success'))
                <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
                </div>

                @endif

                @if(session()->has('loginError'))

                <div id="alert-3" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('loginError') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
                </div>
                @endif

                <span class="mb-3 text-center text-lg font-bold">Login Ke Aurelia Medika</span>
                <form action="/login" method="post">
                @csrf
                <div class="pt-4">
                <span class="mb-2 text-md">Email</span>
                <input
                    type="text"
                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                    name="email"
                    id="email"
                />
                <div class="text-sm text-red-500">
                    @if ($errors->has('email'))
                    <span>{{ $errors->first('email') }}</span>
                    @endif
                </div>
                </div>
                <div class="py-4">
                <span class="mb-2 text-md">Password</span>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                />
                <div class="text-sm text-red-500">
                    @if ($errors->has('password'))
                    <span>{{ $errors->first('password') }}</span>
                    @endif
                </div>
                </div>
                <button
                class="w-full bg-primary text-white p-2 rounded-lg mb-4  hover:opacity-90 hover:shadow-lg transition duration-500"
                >
                Masuk
                </button>
                <div class="text-center text-xs mb-4 text-slate-500">
                    <p>ATAU</p>
                </div>
            </form>
                <a onclick="window.location.href='{{ route('google.login') }}'">
                    <button class="gap-2  text-slate-700 hover:border-secondary hover:shadow transition duration-150 w-full border border-gray-300 text-md p-2 rounded-lg mb-6">
                    <img src="./img/google.svg" alt="img" class="w-6 h-6 inline mr-2" /> Masuk Dengan Google
                    </button>
                </a>
                <div class="text-center text-secondary">
                Tidak Memiliki Akun?
                <a href="/register">
                    <span class="font-bold text-primary hover:text-secondary">Daftar!</span>
                </a>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection
