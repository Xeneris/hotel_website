<div class="container">
    <nav class="bg-ivory-custom fixed w-full z-20 top-0 left-0 border-b">
        <div class="max-w flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <span class="self-center text-4xl font-domine whitespace-nowrap">EcoHotel</span>
            </a>
            @auth
                <!--Avatar-->
                <div class="md:order-3">
                    <x-avatar/>
                    <!--Dropdown options-->
                    <x-avatar-dropdown/>
                </div>
            @else
                <div class="flex md:order-2">
                    <x-login-button/>
                    <x-hamburger-menu/>
                </div>
            @endauth
            <div class="items-center justify-between w-full hidden md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-domine text-2xl md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-ivory-custom">
                    <li>
                        <a href="/"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Home</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">About</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Services</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        const navbarContent = document.getElementById('navbar-sticky');
        const profile = document.getElementById('dropdownAvatarName')

        function handleClick() {
            navbarContent.classList.contains('hidden') ? navbarContent.classList.remove('hidden') : navbarContent.classList.add('hidden')
        }

        function handleProfileDropdown() {
            profile.classList.contains('hidden') ? profile.classList.remove('hidden') : profile.classList.add('hidden')
        }
    </script>
</div>
