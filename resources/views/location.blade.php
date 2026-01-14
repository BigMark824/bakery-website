<x-guest-layout>
    <div class="flex justify-center my-8">
        <div class="w-full max-w-4xl">
            <!-- Heading -->
            <div class="flex items-center space-x-2 mb-4">
                <h1 class="font-pacifico text-3xl">Where to find us?</h1>
            </div>

            <!-- Map -->
            <div class="h-96 mb-4">
                <iframe 
                    src="{{ env('GOOGLE_MAPS_EMBED') }}" 
                    width="100%" 
                    height="100%" 
                    class="rounded-lg shadow-lg border-0"
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

          <div class="flex flex-col space-y-2">
                <!-- menu -->
                <div class="flex items-start space-x-2">
                    <img src="/images/svgs/location-pin.svg" alt="menu Pin" class="w-6 h-6 flex-shrink-0">
                    <span class="text-lg font-medium">
                        {{ env('STORE_ADDRESS') }}
                    </span>
                </div>

                <!-- Business hours -->
                <div class="flex items-start space-x-2">
                    <img src="/images/svgs/clock.svg" alt="Clock" class="w-6 h-6 flex-shrink-0">
                    <span class="text-lg font-medium">
                        Mon–Fri: 9am–5pm
                    </span>
                </div>
            </div>


        </div>
    </div>
</x-guest-layout>
