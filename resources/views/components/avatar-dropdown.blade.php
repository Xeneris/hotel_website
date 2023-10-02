<div class="absolute right-0 pt-[21px]">
    <div id="dropdownAvatarName"
         class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
        <div class="px-4 py-3 text-sm text-gray-900">
            <div class="font-medium "><img class="w-8 h-8 mr-2 rounded-full inline-flex" src="{{auth()->user()->avatar == null ? asset('images/default-avatar.jpg') : asset(auth()->user()->avatar)}}">
                {{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
            <div class="truncate">{{auth()->user()->email}}</div>
        </div>
        <ul class="py-2 text-sm text-gray-700"
            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
            <li>
                <a href="{{route('profile')}}"
                   class="block px-4 py-2 hover:bg-gray-100">Edit profile</a>
            </li>
            <li>
                <a href="#"
                   class="block px-4 py-2 hover:bg-gray-100">Bookings</a>
            </li>
        </ul>
        <div class="py-2">
            <a href="{{route('logout')}}"
               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign
                out</a>
        </div>
    </div>
</div>
