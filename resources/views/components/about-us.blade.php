<div class="bg-green-custom mx-auto h-full w-full">
    <p class="text-ivory-custom text-3xl">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.
    </p>





    <form method="POST" action="{{ route('rooms.store') }}">
        @csrf
        Name: <input type="text" name="name">
        Floor Num: <input type="text" name="floor_number">
        Check In Date: <input type="date" name="check_in_date">
        Occupancy: <input type="number" name="occupancy">

        <button type="submit">
            Submit
        </button>
    </form>

</div>
