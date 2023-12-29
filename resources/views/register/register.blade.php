@extends('layouts.mainlogin')

@section('container')

<section class="pt-12 pb-7">
    <div class="container mx-auto">
        <div class="flex flex-col items-center justify-center">
            <img src="./img/logo-merah.png" width="320px" alt="">
        </div>
        <div class="flex flex-wrap items-center justify-center">
            <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
                <!-- left side -->
                <div class="flex flex-col justify-center p-8 md:p-14">
                    <span class="mb-3 text-center text-lg font-bold">Daftar Ke Aurelia Medika</span>

                    <form action="/register" method="post">
                        @csrf
                        <div class="py-4">
                            <span class="mb-2 text-md">Name</span>
                            <input
                                type="text"
                                class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                                name="name"
                                id="name"
                            />
                        </div>
                        <div class="py-4">
                            <span class="mb-2 text-md">Email</span>
                            <input
                                type="email"
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
                                class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                                name="password"
                                id="password"
                            />
                            <div class="text-sm text-red-500">
                                @if ($errors->has('password'))
                                <span>{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="pb-4">
                            <span class="mb-2 text-md">Confirm Password</span>
                            <input
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                            />
                            <div class="text-sm text-red-500">
                                @if ($errors->has('password_confirmation'))
                                <span>{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>
                        <button class="w-full bg-primary text-white p-2 rounded-lg mb-4  hover:opacity-90 hover:shadow-lg transition duration-500">
                            Daftar
                        </button>
                        <div class="text-center text-xs mb-4 text-slate-500">
                    <p>ATAU</p>
                </div>
                    </form>
                    <button onclick="window.location.href='{{ route('google.login') }}'" class="w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-secondary hover:text-white">
                        <img src="./img/google.svg" alt="img" class="w-6 h-6 inline mr-2" />
                        Daftar Dengan Google
                    </button>
                    <div class="text-center text-secondary">
                        Sudah Memiliki Akun?
                        <a href="/login">
                            <span class="font-bold text-primary hover:text-secondary">Masuk!</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
