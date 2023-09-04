<header class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 ">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="/" class="flex ml-2 md:mr-24  ">
            <x-application-logo class="w-full"></x-application-logo>
          </a>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ml-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="https://scontent.fmnl17-3.fna.fbcdn.net/v/t39.30808-6/294561777_578879500335630_7264503837743250198_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=a2f6c7&_nc_ohc=tZcTpEwmbXMAX-c-rmp&_nc_ht=scontent.fmnl17-3.fna&oh=00_AfAPh8bZzk4iRF_Z-rOis_KUsxuQ8BKbC5ZUF3u-0VT61Q&oe=64FAA6A0" alt="user photo">
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <ul class="py-1" role="none">
                  <li>
                    <a href="#" class="block px-4 py-2 account-link hover:text-blue-500">Account</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 account-link hover:text-blue-500">Support</a>
                  </li>
                  <li>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
        
                        <button type="submit" class="block px-4 py-2 account-link hover:text-blue-500">Sign Out</button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </header>


