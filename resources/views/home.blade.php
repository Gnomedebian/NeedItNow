<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap"
      rel="stylesheet"
    />

    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body>
    <div class="relative z-50 flex justify-between py-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex gap-2 items-center font-bold">
            <img src="{{ asset('images/icon.png') }}" alt="My Logo" class="w-8 h-8">
            <h3>NeedItNow</h3>
        </div>
            @if (Route::has('login'))
                <div class="flex flex-row gap-4">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">Log in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="items-center px-4 py-2 bg-[#633fbc] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 focus:bg-gray-600 active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Get started</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
    <div class="mx-auto mb-36 max-w-7xl px-4 sm:px-6 lg:px-8 pb-16 pt-20 text-center lg:pt-32">
        <h1 class="font-semibold mx-auto max-w-4xl font-display text-5xl tracking-tight text-slate-900 sm:text-7xl"><span class="text-[#633fbc]">NeedItNow,</span> your marketplace for immediate needs.</h1>
        <p class="mx-auto mt-6 max-w-2xl text-lg tracking-tight text-slate-700">Connecting buyers and sellers instantly.</p>
        <div class="mt-10 flex justify-center gap-x-6">
            <a class="items-center px-4 py-2 bg-slate-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 focus:bg-gray-600 active:bg-gray-700" href="https://medium.com/@gnomedebian7s/needitnow-blog-d91289327d36">visit our blog</a>
            <a class="items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" href="https://github.com/Gnomedebian/NeedItNow-Project_video">watch video</a>
        </div>
    </div>
    <section class="flex flex-col w-full py-16 bg-gray-100">
        <h1 class="font-extrabold text-black mx-auto mb-11 text-2xl">About NeedItNow marketplace</h1>
        <div class="mx-auto flex flex-row">
            <img class="w-96 h-96" src="{{ asset('images/3d-icon.png') }}" alt="a">
            <div class="flex flex-col px-4 py-6 w-96 justify-center">
                <p class="text-black text-justify">
                    NeedItNow is a dynamic online marketplace designed to connect buyers and sellers in Morocco.
                    Our platform makes it easy to find and offer a wide range of products, ensuring convenience, variety, and transparency.
                    Whether you are looking to buy or sell, NeeditNow provides a user-friendly interface to meet all your needs.
                    Join us today and experience a seamless and efficient marketplace experience.
                </p>
            </div>
        </div>
    </section>

    <!-- Why Choose NeeditNow Section -->
<section class="py-12 bg-transparent">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8">Why Choose NeeditNow?</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="benefit text-center">
          <img src="{{ asset('images/icon-convenience.png') }}" alt="Convenience" class="mx-auto mb-4 w-32 h-32">
          <h3 class="text-xl font-semibold mb-2">Convenience</h3>
          <p>Easily find products that are hard to locate in nearby stores.</p>
        </div>
        <div class="benefit text-center">
          <img src="{{ asset('images/icon-variety.png') }}" alt="Variety" class="mx-auto mb-4 w-32 h-32">
          <h3 class="text-xl font-semibold mb-2">Variety</h3>
          <p>Access a wide range of products from different sellers.</p>
        </div>
        <div class="benefit text-center">
          <img src="{{ asset('images/icon-transparency.png') }}" alt="Transparency" class="mx-auto mb-4 w-32 h-32">
          <h3 class="text-xl font-semibold mb-2">Transparency</h3>
          <p>Clear and detailed offers from sellers, including product condition and price.</p>
        </div>
        <div class="benefit text-center">
          <img src="{{ asset('images/icon-user-friendly.png') }}" alt="User-Friendly" class="mx-auto mb-4 w-32 h-32">
          <h3 class="text-xl font-semibold mb-2">User-Friendly</h3>
          <p>Simple and intuitive interface for both clients and sellers.</p>
        </div>
      </div>
    </div>
  </section>
    <footer class="w-full h-36 bg-gray-100 flex flex-col items-center justify-center font-extralight text-sm">
        <img src="{{ asset('images/icon.png') }}" alt="My Logo" class="w-6 h-6 mb-3" alt="needitnow-logo">
        <p class="text-black ">© 2024 NeedItNow® <a href="https://github.com/Gnomedebian" class="underline cursor-pointer">Yassine Amgarou</a> • <a href="https://docs.google.com/document/d/16PzGg4T-Y3rdwmOEye2--higXpThx8kGj4IfeHzxczg/edit?usp=sharing" class="underline cursor-pointer">Privacy Policy</a></p>
    </footer>
</body>
</html>