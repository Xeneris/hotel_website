<div class="bg-[url('/public/images/welcomePageImage.jpg')] bg-center bg-cover bg-no-repeat">
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-ivory-custom rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Create and account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                   placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">First
                                Name</label>
                            <input type="first-name" name="first-name" id="first-name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                   placeholder="John" required="">
                        </div>
                        <div>
                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Last
                                Name</label>
                            <input type="last-name" name="last-name" id="last-name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                   placeholder="Doe" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                   required="">
                        </div>
                        <div>
                            <label for="confirm-password"
                                   class="block mb-2 text-sm font-medium text-gray-900">Confirm
                                password</label>
                            <input type="confirm-password" name="confirm-password" id="confirm-password"
                                   placeholder="••••••••"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                   required="">
                        </div>
                        <button type="submit"
                                class="w-full text-white bg-green-custom hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Create an account
                        </button>
                        <p class="text-sm font-light text-gray-500">
                            Already have an account? <a href="/login"
                                                        class="font-medium text-primary-600 hover:underline">Login
                                here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
