<button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
        class="flex text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 md:mr-0 focus:ring-4 focus:ring-gray-100"
        type="button" onclick="handleProfileDropdown()">
    <span class="sr-only">Open user menu</span>
    <img class="w-8 h-8 mr-2 rounded-full" src=""
         alt="user photo">
    Welcome, {{auth()->user()->first_name}} {{auth()->user()->last_name}}
</button>
