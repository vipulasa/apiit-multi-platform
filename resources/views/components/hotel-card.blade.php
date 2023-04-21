<div class="w-full md:w-1/2 xl:w-1/3 px-4" x-data="hotelCard{{ $hotel['id'] }}">
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
                <template x-if="display_tax">
                    <span class="text-sm">Tax ($ <span x-text="display_tax"></span>)</span>
                </template>
            </a>

            <button type="button" x-on:click="calculateTax">Show Tax</button>

            <div class="block mt-4">
                <form action="/book-now" method="post" class="flex space-x-2">
                    @csrf
                    <input type="text" name="rooms" placeholder="rooms" required>
                    <input type="hidden" name="hotel_id" value="{{ $hotel['name'] }}" />
                    <button type="submit"
                        class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-black transition">
                        Book Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('hotelCard{{ $hotel['id'] }}', () => ({
            tax: 0,
            display_tax: 0,
            hotel_id: {{ $hotel['id'] }},
            calculateTax() {

                fetch('/api/calculate-tax/'+this.hotel_id)
                    .then(response => response.json())
                    .then(data => {
                        this.display_tax = data.display_tax;
                        this.tax = data.tax;
                    });

                this.tax = 100;
            },
        }))
    })
</script>
