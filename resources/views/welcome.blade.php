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
<body>
<div
    class="bg-[url('/images/welcomePageImage.jpg')] relative rounded-lg bg-cover bg-center bg-no-repeat text-center h-screen object-contain w-full">
    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
         style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="flex h-full items-center justify-center">
            <div class="text-white">
                <h2 class="mb-4 lg:text-8xl md:text-6xl text-5xl font-semibold text-cyan-300 font-open-sans">
                    Welcome
                </h2>
                <h4 class="mb-6 lg:text-5xl md:text-3xl text-2xl font-semibold font-open-sans text-cyan-300">
                    to PHP Hotel
                </h4>
                <button type="button"
                        class="bg-transparent hover:bg-cyan-700 text-cyan-300 font-semibold font-opne-sans hover:text-white py-4 px-6 border-4 border-cyan-300 text-cyan-300 hover:border-transparent rounded text-xl"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                    Book now!
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
