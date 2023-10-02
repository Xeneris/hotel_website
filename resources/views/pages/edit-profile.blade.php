@extends('layouts.layout')
@section('title', 'Register')
@section('content')
    <div class="bg-[url('/public/images/welcomePageImage.jpg')] bg-center bg-cover bg-no-repeat">
        <section>
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div
                    class="w-full bg-ivory-custom rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                            Edit profile
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{route('profile-post')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                                    email</label>
                                <input type="email" name="email" id="email"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                       value="{{auth()->user()->email}}">
                            </div>
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First
                                    Name</label>
                                <input type="first_name" name="first_name" id="first_name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                       value="{{auth()->user()->first_name}}">
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last
                                    Name</label>
                                <input type="last_name" name="last_name" id="last_name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                       value="{{auth()->user()->last_name}}">
                            </div>
                            <div>
                                <div class="mx-auto max-w-xs">
                                    <label for="avatar" class="mb-1 block text-sm font-medium text-gray-700">Change Avatar</label>
                                    <input id="avatar" type="file" name="avatar" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-teal-500 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                </div>
                            </div>
                            <button type="submit"
                                    class="w-full text-white bg-green-custom hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Update your account
                            </button>
                            <div role="alert">
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="border border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                @endif
                                @if(session()->has('success'))
                                    <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2 mt-[3.5%]">
                                        Success
                                        <div
                                            class="border border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                                            {{session('success')}}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
