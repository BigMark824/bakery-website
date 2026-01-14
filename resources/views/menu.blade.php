<x-guest-layout>
    <div class="flex justify-center my-8">
        <div class="w-full max-w-6xl">
            <!-- Heading -->
            <div class="flex items-center space-x-2 mb-4">
                <h1 class="font-pacifico text-3xl">Our menu</h1>
            </div>

            <!-- Menu items -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-6 justify-center">
                @foreach($menuItems as $item)
                    <div class="flex rounded overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 ease-in-out bg-white h-64 w-full max-w-5xl mx-auto">
                        
                        <div class="flex-shrink-0 w-64 h-full">
                            <img class="w-full h-full object-cover" src="{{ $item->image_url }}" alt="{{ $item->name }}">
                        </div>

                        <div class="flex-1 flex flex-col justify-between bg-gray-50 p-6">
                            <div>
                                <div class="font-bold text-3xl mb-3">{{ $item->name }}</div>
                                <p class="text-gray-700 text-base">{{ $item->description }}</p>
                            </div>

                            <div class="bg-gray-200 text-gray-900 font-semibold text-lg px-4 py-2 text-right rounded mt-4">
                                ${{ number_format($item->price, 2) }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-guest-layout>
