<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="https://flowbite.com" class="flex ms-2 md:me-24">
          <img  src="/img/logo-merah.png" width="220px" alt="aureliamedika">
        </a>
      </div>
      @auth
                    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                      <span class="sr-only">Open user menu</span>
                      <p>Halo, {{ auth()->user()->name }}</p>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                      <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 ">{{ auth()->user()->name }}</span>
                        <span class="block text-sm  text-gray-500 truncate ">{{ auth()->user()->email }}</span>
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
  </div>
</nav>
