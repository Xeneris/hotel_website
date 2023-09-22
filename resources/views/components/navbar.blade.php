<div>
    <nav class="bg-ivory-custom fixed w-full z-20 top-0 left-0 border-b">
        <div class="max-w flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="{{asset("images/logo.png")}}" class="h-10 mr-3" alt="Hotel Logo">
                <span class="self-center text-4xl font-domine whitespace-nowrap dark:text-white">EcoHotel</span>
            </a>
            <div class="flex md:order-2">
                <a href="{{url('/login')}}">
                    <button type="button"
                            class="text-ivory-custom bg-green-custom hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-4 py-2 text-center mr-3 md:mr-0">
                        Sign in
                    </button>
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button" id="hamburger-menu"
                        onclick="handleClick(this)"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-md text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-sticky" aria-expanded="false">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none"
                         viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between w-full hidden md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-domine text-2xl md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-ivory-custom">
                    <li>
                        <a href="/"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        const navbarContent = document.getElementById('navbar-sticky');

        function handleClick() {
            navbarContent.classList.contains('hidden') ? navbarContent.classList.remove('hidden') : navbarContent.classList.add('hidden')
        }
    </script>

</div>
