<section class="border border-[#DDC8B0] bg-white p-5 shadow-[10px_10px_0_rgba(35,27,19,0.08)]">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <p class="text-sm uppercase tracking-[0.24em] text-[#C64E00]">Search the marketplace</p>
            <h2 class="mt-2 text-3xl font-semibold tracking-tight text-[#1F1B16]">Find the perfect product fast</h2>
        </div>
        <form class="relative w-full sm:max-w-xl" action="{{ route('products.search') }}" method="GET">
            <label for="search" class="sr-only">Search products</label>
            <input
                id="search"
                type="search"
                name="query"
                value="{{ request('query') }}"
                placeholder="Search products, brands, categories"
                class="w-full border border-[#BFA98F] bg-[#FFF8EF] px-5 py-4 pr-28 text-base text-[#3B2800] outline-none transition focus:border-[#FF7A18] focus:ring-4 focus:ring-[#FF7A1833]"
            />
            <button type="submit" class="absolute right-2 top-2.5 inline-flex h-11 items-center justify-center bg-[#1F1B16] px-5 text-sm font-semibold text-white transition hover:bg-[#FF7A18]">Search</button>
        </form>
    </div>
    <div class="mt-5 flex flex-wrap gap-2 text-sm text-[#7C5A2F]">
        <span class="inline-flex items-center border border-[#E6D5BF] bg-[#FFF8EF] px-3 py-1">Orange Gadgets</span>
        <span class="inline-flex items-center border border-[#E6D5BF] bg-[#FFF8EF] px-3 py-1">Home Decor</span>
        <span class="inline-flex items-center border border-[#E6D5BF] bg-[#FFF8EF] px-3 py-1">Travel Gear</span>
        <span class="inline-flex items-center border border-[#E6D5BF] bg-[#FFF8EF] px-3 py-1">Beauty Sets</span>
    </div>
</section>
