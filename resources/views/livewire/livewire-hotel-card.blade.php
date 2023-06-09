<div class="w-full md:w-1/2 xl:w-1/3 px-4">
    <div class="bg-white rounded-lg overflow-hidden mb-10">
        <img src="{{ $hotel['image'] }}" alt="image" class="w-full" />
        <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
            <h3>
                <a href="javascript:void(0)"
                    class=" font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block hover:text-primary">
                    {{ $hotel['name'] }}
                </a>
            </h3>
            <p class="text-base text-body-color leading-relaxed mb-7">
                {{ $hotel['description'] }}
            </p>
            <a href="javascript:void(0)"
                class=" inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-white transition">
                $ {{ $price }}

                @if($tax)
                    +
                    <span class="text-sm">Tax ($ {{ $tax }})</span>
                @endif
            </a>

            <button type="button" wire:click="calculateTax">Show Tax</button>

            <div class="block mt-4 flex space-x-2">
                <input type="text" name="rooms" wire:model="rooms" placeholder="rooms" required>

                <button type="button"
                    wire:click="bookNow"
                    class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-black transition">
                    Book Now
                </button>
            </div>

        </div>
    </div>
</div>
