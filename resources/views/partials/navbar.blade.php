<header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-6">
                <a href="#home" class="block py-4 pl-2">
                    <img  src="/img/logo-merah.png" width="220px" alt="aureliamedika">
                </a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[300px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none ">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="#home" class="text-base font-semibold text-secondary py-2 mx-5 flex group-hover:text-primary">Home</a>
                        </li>
                        <li class="group">
                            <a href="#aboutus" class="text-base font-semibold text-secondary py-2 mx-5 flex group-hover:text-primary">About us</a>
                        </li>
                        <li class="group">
                            <a href="#ourdoctor" class="text-base font-semibold text-secondary py-2 mx-5 flex group-hover:text-primary">Our Doctor</a>
                        </li>
                        <li class="group">
                            <a href="#contact" class="text-base font-semibold text-secondary py-2 mx-5 flex group-hover:text-primary">Contact</a>
                        </li>

                @guest
                    <li class="group my-4 mx-10 lg:my-0 lg:mx-4">
                        <a href="/register">
                        <button class="text-base font-medium text-white bg-primary py-3 px-5 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500 ">Register</button>
                    </a>
                    </li>
                    <li class="group mx-10 lg:mx-0">
                        <a href="/login">
                            <button class="text-base font-medium text-white bg-secondary py-3 px-7 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500 ">Login</button>
                        </a>
                    </li>
                    </ul>
                @endguest
                @auth
                    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                      <span class="sr-only">Open user menu</span>
                      <p>Halo, {{ auth()->user()->name }}</p>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                      <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
                      </div>
                      <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Dashboard</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Settings</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Earnings</a>
                        </li>
                        <li>
                          <a href="/logout" class="drop block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                        </li>
                      </ul>
                    </div>
                    <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-user" aria-expanded="false">
                      <span class="sr-only">Open main menu</span>
                      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                      </svg>
                  </button>
                    </div>
                @endauth
                </nav>
            </div>
        </div>
    </div>
</header>
