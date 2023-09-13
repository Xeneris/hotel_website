<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Domine&family=Open+Sans:wght@300;400&display=swap');
    </style>
    <title>Welcome</title>
</head>
<body class="">
<header class="fixed top-0 w-full bg-[url('/public/images/welcomePageImage.jpg')] bg-center bg-cover bg-no-repeat">
    <div class="hover:bg-ivory-custom hover:text-green-custom">
        <nav
            class="font-domine text-3xl font-semibold flex justify-between items-center w-[92%] mx-auto h-[4.5vw] text-ivory-custom hover:text-green-custom">
            <div>
                <a href="/"><img class="w-40" src="{{asset('../images/logo.png')}}" alt="logo"></a>
            </div>
            <div class="">
                <ul class="flex items-center gap-[4vw]">
                    <li>
                        <a class="hover:text-d-cyan">About us</a>
                    </li>
                    <li>
                        <a class="hover:text-d-cyan" href="http://localhost/Gallery"> Gallery </a>
                    </li>
                    <li>
                        <a class="hover:text-d-cyan">Rooms</a>
                    </li>
                    <li>
                        <a class="hover:text-d-cyan">Contact us!</a>
                    </li>
                </ul>
            </div>
            <div>
                <button class="bg-yellow-custom text-green-custom px-5 py-2 rounded-full hover:bg-yellow-200">
                    Sign in
                </button>
            </div>
        </nav>
    </div>
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
            <img class="w-16 absolute bottom-0 pb-20 animate-bounce" src="{{asset("images/arrow.png")}}">
        </div>
    </div>
</header>
</body>
</html>
