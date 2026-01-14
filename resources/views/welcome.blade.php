<x-guest-layout>
<div class="relative w-full h-screen overflow-hidden">
   <!-- Background vid -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
        <video autoplay muted loop playsinline class="w-full h-full object-cover transform scale-110 blur-sm brightness-50">
            <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
        <h1 class="text-5xl font-bold">
            Welcome to 
            <span class="font-pacifico text-5xl">{{ env('APP_NAME') }}</span>
        </h1>

        <p class="mt-4 text-xl">{{ env('SUBHEADING_TEXT') }}</p>

        <div class="flex gap-4 mt-6">
            <!-- Order button -->
            <a href="{{ route('menu') }}" 
            class="inline-flex items-center gap-2 bg-transparent hover:bg-gray-400/25 text-white font-semibold py-3 px-8 border border-white hover:border-transparent rounded transition duration-300">
                <img src="{{ asset('images/svgs/shop.svg') }}" alt="Shop" class="w-6 h-6 flex-shrink-0 filter invert">
                <span>View our menu!</span>
            </a>

            <!-- Find us button -->
            <a href="{{ route('location') }}" 
            class="inline-flex items-center gap-2 bg-transparent hover:bg-gray-400/25 text-white font-semibold py-3 px-8 border border-white hover:border-transparent rounded transition duration-300">
                <img src="{{ asset('images/svgs/location-pin.svg') }}" alt="Contact" class="w-6 h-6 flex-shrink-0 filter invert">
                <span>Find our store!</span>
            </a>
        </div>


    </div>
</div>
</x-guest-layout>
