@extends('layouts.main')

@section('container')
        <!-- Hero Section Start -->
        <section id="home" class="jumbotron pt-36">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full self-center px-10 lg:w-1/2">
                        <h1 class="block font-bold text-secondary text-4xl uppercase mb-1 lg:text-6xl">Selamat Datang</h1>
                        <h2 class="font-medium text-secondary text-lg mb-5 lg:text-4xl">di
                           <span class="text-secondary font-bold">Aurelia Medika</span>
                        </h2>
                        <p class="font-medium text-secondary mb-7 leading-relaxed">Lorem ipsum dolor sit amet consectetur.
                            <span class="text-secondary font-bold">Ambil Antrian!</span>
                        </p>
                        <button class="text-base font-medium uppercase text-white bg-primary py-3 px-5 rounded-full  hover:opacity-80 hover:shadow-lg transition duration-500 ">Ambil Antrian</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero Section End -->

        {{-- Poli Start --}}
         <section id="poli" class="ml-10">
                <div class="container">
                <div class="-translate-y-20 ml-4 lg:ml-0 lg:flex">
                    <div class="w-full flex items-stretch">
                        <div class="max-w-sm mb-6 p-6 bg-primary border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Sistem Antrian Online!</h5>
                            </a>
                            <p class="mb-3 font-normal text-white dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore laboriosam natus minus quia! Aut, modi repudiandae perferendis aspernatur velit debitis.</p>
                            <button class="w-full text-base font-medium uppercase text-white  bg-white bg-opacity-25 items-center py-3 px-5  rounded-full  hover:bg-opacity-30 hover:shadow-lg transition duration-500 ">Ambil Antrian</button>
                        </div>
                    </div>
                    <div class="w-full lg:w-9/12">
                        <div class="max-w-sm mb-6 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 lg: mr-5">
                            <div class="flex items-center justify-center mb-3">
                                <svg class="w-[48px] h-[48px] text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 1v16M1 9h16"/>
                                </svg>
                            </div>
                            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Poli Umum</h5>
                        <p class="mb-3 font-normal text-center text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore laboriosam natus minus quia! Aut, modi repudiandae perferendis aspernatur velit debitis.</p>
                        </div>
                   </div>
                    <div class="w-full lg:w-9/12">
                        <div class="max-w-sm mb-6 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 lg: mr-5">
                            <div class="flex items-center justify-center mb-3">
                                <svg class="w-[48px] h-[48px] text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 1v16M1 9h16"/>
                                </svg>
                            </div>
                            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Poli Gigi</h5>
                        <p class="mb-3 font-normal text-center text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore laboriosam natus minus quia! Aut, modi repudiandae perferendis aspernatur velit debitis.</p>
                        </div>
                   </div>
                    <div class="w-full lg:w-9/12">
                        <div class="max-w-sm mb-6 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 lg: mr-5">
                            <div class="flex items-center justify-center mb-3">
                                <svg class="w-[48px] h-[48px] text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 1v16M1 9h16"/>
                                </svg>
                            </div>
                            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Poli THT</h5>
                        <p class="mb-3 font-normal text-center text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore laboriosam natus minus quia! Aut, modi repudiandae perferendis aspernatur velit debitis.</p>
                        </div>
                   </div>
                </div>
          </section>
        {{-- Poli End --}}

@endsection

