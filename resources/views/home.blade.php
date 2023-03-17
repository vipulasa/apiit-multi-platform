<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-xl pb-8">
                <div class="w-full h-[250px]">
                    <img src="{{ $cover }}" class="w-full h-full rounded-tl-lg rounded-tr-lg">
                </div>
                <div class="flex flex-col items-center -mt-20">
                    <img src="{{ $image }}" class="w-40 border-4 border-white rounded-full">
                    <div class="flex items-center space-x-2 mt-2">
                        <p class="text-2xl">{{ $title }}</p>
                        <span class="bg-blue-500 rounded-full p-1" title="Verified">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                    </div>
                    <p class="text-gray-700">{{ $description }}</p>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4 mt-9">
                @foreach ($hotels as $hotel)
                    <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                        <div class="bg-white rounded-lg overflow-hidden mb-10">
                            <img src="{{  $hotel['image'] }}"
                                alt="image" class="w-full" />
                            <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                                <h3>
                                    <a href="javascript:void(0)"
                                        class=" font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block hover:text-primary">
                                        {{  $hotel['name'] }}
                                    </a>
                                </h3>
                                <p class="text-base text-body-color leading-relaxed mb-7">
                                    {{  $hotel['description'] }}
                                </p>
                                <a href="javascript:void(0)"
                                    class=" inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-white transition">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
