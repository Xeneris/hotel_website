@extends('layouts.layout')
@section('title', 'Login')
@section('content')
    <div class="bg-[url('/public/images/welcomePageImage.jpg')] bg-center bg-cover bg-no-repeat">
        <section>
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div
                    class="w-full bg-ivory-custom rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                            Sign in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{route('login-post')}}" method="POST">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                                    email</label>
                                <input type="email" name="email" id="email"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                       placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password"
                                       class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                       required="">
                            </div>
                            <div>
                                <button type="submit"
                                        class="flex w-full justify-center rounded-md bg-green-custom px-3 py-1.5 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Sign in
                                </button>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox" data-val="true" name="remember"
                                               class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500">Remember me</label>
                                    </div>
                                </div>
                                <a href="#"
                                   class="text-sm font-medium text-primary-600 hover:underline">Forgot
                                    password?</a>
                            </div>
                            <p class="text-sm font-light text-gray-500">
                                Don’t have an account yet? <a href="/register"
                                                              class="font-medium text-primary-600 hover:underline">Sign
                                    up</a>
                            </p>
                            <div role="alert" class="pb-[5%] w-auto">
                                @if(session()->has('error'))
                                    <div
                                        class="border border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                        {{session('error')}}
                                    </div>
                                @endif
                                @if(session()->has('success'))
                                    <div
                                        class="border border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                                        {{session('success')}}
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
