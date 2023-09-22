<header class="top-0 w-full bg-[url('/public/images/welcomePageImage.jpg')] bg-center bg-cover bg-no-repeat">
    <x-navbar/>
    <div
        class="relative text-center h-screen">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed">
            <div class="flex h-full items-center justify-center">
                <div>
                    <h2 class="mb-4 lg:text-8xl md:text-6xl text-5xl font-semibold text-yellow-custom font-open-sans">
                        Welcome
                    </h2>
                    <h4 class="mb-6 lg:text-5xl md:text-3xl text-2xl font-semibold font-open-sans text-yellow-custom">
                        to Eco Hotel
                    </h4>
                    <button type="button"
                            class="bg-transparent hover:bg-yellow-custom font-semibold font-open-sans hover:text-green-custom py-3 px-5 border-4 border-yellow-custom text-yellow-custom hover:border-transparent rounded text-2xl">
                        Book now!
                    </button>
                </div>
            </div>
        </div>
        <div class="h-screen flex justify-center items-center mx-auto">
            <img class="w-16 absolute bottom-0 pb-5 lg:mb-12 animate-bounce" src="{{asset("images/arrow.png")}}">
        </div>
    </div>
</header>
