@extends('layouts.layout')
@section('title', 'Your Profile')
@section('content')
    <form action="{{route('profile-post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="margin-top: 500px">


            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" name="avatar" aria-describedby="file_input_help" id="avatar" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

            <button type="submit">
                Submit
            </button>
        </div>
    </form>
@endsection
