@extends('layouts.mainlogin')


@section('container')

@if (session('google_user'))
  @php
      $google_user = session('google_user');
  @endphp
@endif

<section class="pt-12 pb-7">
<div class="container mx-auto">
    <div class="flex flex-col items-center justify-center">
        <img src="/img/logo-merah.png" width="320px" alt="">
    </div>
    <div class="flex flex-wrap items-center justify-center">
        <div  class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-14">
            <span class="mb-3 text-center text-lg font-bold">Register</span>

            <form action="/register/google" method="post">
            @csrf
            <div class="py-4">
            <input type="hidden" id="google_id" name="google_id" value="{{ $google_user['google_id'] }}">
            <span class="mb-2 text-md">Name</span>
            <input
                type="text"
                class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                name="name"
                id="name"
                placeholder="John Doe" required value="{{ $google_user['name'] }}" required readonly>
            </div>
            <div class="py-4">
                <span class="mb-2 text-md">Email</span>
                <input
                type="email"
                class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                name="email"
                id="email"
                placeholder="name@email.com" required value="{{ $google_user['email'] }}" readonly>
                </div>
                <div class="text-sm text-red-500">
                    @if ($errors->has('email'))
                    <span>{{ $errors->first('email') }}</span>
                    @endif
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
                id="password"
                class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"/>
                <div class="text-sm text-red-500">
                    @if ($errors->has('password'))
                    <span>{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <button type="submit" class="w-full bg-[#780000] text-white p-2 rounded-lg mb-4  hover:opacity-90 hover:shadow-lg transition duration-500">
            Register
            </button>
            </form>
            <button class="gap-2  text-slate-700 hover:border-secondary hover:shadow transition duration-150 w-full border border-gray-300 text-md p-2 rounded-lg mb-6">
            <img src="/img/google.svg" alt="img" class="w-6 h-6 inline mr-2" />
                Register with Google
            </button>
            <div class="text-center text-secondary">
                 have an account?
                <a href="/login">
                    <span class="font-bold text-primary hover:text-secondary">Login</span>
                </a>
                </div>
             </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

@endsection
