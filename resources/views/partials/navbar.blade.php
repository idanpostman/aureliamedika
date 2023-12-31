<header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10">
    <div class="container mx-auto">
        <div class="flex items-center justify-between relative">
            <div class="px-6">
                <a href="/#home" class="block py-4 pl-2">
                    <img class="w-[180px] lg:w-[220px]" src="/img/logo-merah.png"  alt="aureliamedika">
                </a>
            </div>
            <div class="flex py-5 lg:py-0 lg:mt-1">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-5 bottom-3 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
                <nav id="nav-menu" class="hidden absolute py-5 bg-[#EDF2F4] shadow-lg rounded-lg max-w-[300px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none ">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/#home" class="text-base font-semibold text-secondary py-2 mx-5 flex group-hover:text-primary">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="/#about" class="text-base font-semibold text-secondary py-2 mx-5 flex group-hover:text-primary">Tentang Kami</a>
                        </li>
                        <li class="group">
                            <a href="/#doctor" class="text-base font-semibold text-secondary py-2 mx-5 flex group-hover:text-primary">Dokter</a>
                        </li>
                        <li class="group">
                            <a href="/#contact" class="text-base font-semibold text-secondary py-2 mx-5 flex group-hover:text-primary">Kontak</a>
                        </li>
                        @guest
                            <div class=" group my-4 mx-10 lg:my-0 lg:mx-4">
                                <a href="/register">
                                    <button class="text-base font-medium text-white bg-primary py-3 px-5 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500  ">Daftar</button>
                                </a>
                            </div>
                            <div class="group mx-10 lg:mx-0">
                                <a href="/login">
                                    <button class="text-base font-medium text-white bg-secondary py-3 px-5 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500 ">Masuk</button>
                                </a>
                            </div>
                        @endguest
                    </ul>
                </nav>
                @auth
    <div class="flex items-center ml-16 mt-2 lg:mt-0 text-secondary hover:text-primary">
        <button type="button" class="text-base mr-[70px] lg:mr-0 inline-flex font-bold" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only"></span>
            <p class="-indent-28 ml-16">Halo, {{ auth()->user()->name }}</p>
            <div class="ml-2 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512">
                    <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                </svg>
            </div>
        </button>
    </div>

    <!-- Dropdown menu -->
    <div class="z-50 hidden my-4 text-base list-none bg-[#EDF2F4] divide-y divide-gray-300 rounded-lg shadow" id="user-dropdown">
        <div class="px-4 py-3">
            <span class="block text-sm text-gray-900">{{ auth()->user()->name }}</span>
            <span class="block text-sm text-gray-500 truncate">{{ auth()->user()->email }}</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
            @if(auth()->user()->Admin())
                <li>
                    <a href="/dashboard" class="drop block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        Dashboard
                    </a>
                </li>
            @endif
            <li>
                <a href="/logout" class="drop block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</a>
            </li>
        </ul>
    </div>
@endauth
            </div>
        </div>
    </div>
</header>
