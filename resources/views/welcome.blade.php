@extends('layouts.app')

@section('content')
<div class="space-y-12">
    <header class="sticky top-4 z-50 border border-[#D6C0A8] bg-[#FFF9F1]/95 shadow-[8px_8px_0_rgba(31,27,22,0.08)] backdrop-blur">
        <nav class="flex min-h-16 items-center justify-between gap-4 px-4 sm:px-6">
            <a href="{{ url('/') }}" class="group inline-flex items-center gap-3 text-sm font-black uppercase tracking-[0.22em] text-[#1F1B16]">
                <span class="relative grid h-10 w-10 place-items-center bg-[#FF7A18] text-white">
                    <svg class="h-5 w-5 animate-market-draw" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 7h15l-2 9H8L6 7Z" />
                        <path d="M6 7 5 3H2" />
                        <circle cx="9" cy="20" r="1" />
                        <circle cx="18" cy="20" r="1" />
                    </svg>
                    <span class="absolute -right-1 -top-1 h-2.5 w-2.5 bg-[#1F1B16] animate-market-pulse"></span>
                </span>
                Market
            </a>

            <div class="hidden items-center gap-1 md:flex">
                <a href="#collections" class="px-4 py-3 text-sm font-semibold text-[#5B4631] transition hover:bg-[#1F1B16] hover:text-white">Products</a>
                <a href="#workflow" class="px-4 py-3 text-sm font-semibold text-[#5B4631] transition hover:bg-[#1F1B16] hover:text-white">Workflow</a>
                <a href="{{ route('products.index') }}" class="px-4 py-3 text-sm font-semibold text-[#5B4631] transition hover:bg-[#1F1B16] hover:text-white">Shop</a>
                <a href="/admin/dashboard" class="ml-2 inline-flex items-center gap-2 bg-[#1F1B16] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#FF7A18]">
                    <svg class="h-4 w-4 animate-market-float" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 13h8V3H3v10Z" />
                        <path d="M13 21h8V3h-8v18Z" />
                        <path d="M3 21h8v-6H3v6Z" />
                    </svg>
                    Dashboard
                </a>
            </div>

            <details class="relative md:hidden">
                <summary class="list-none bg-[#1F1B16] px-4 py-3 text-sm font-bold text-white marker:hidden">Menu</summary>
                <div class="absolute right-0 mt-3 grid w-56 border border-[#D6C0A8] bg-white shadow-[8px_8px_0_rgba(31,27,22,0.08)]">
                    <a href="#collections" class="border-b border-[#EFE0CF] px-4 py-3 text-sm font-semibold">Products</a>
                    <a href="#workflow" class="border-b border-[#EFE0CF] px-4 py-3 text-sm font-semibold">Workflow</a>
                    <a href="{{ route('products.index') }}" class="border-b border-[#EFE0CF] px-4 py-3 text-sm font-semibold">Shop</a>
                    <a href="/admin/dashboard" class="px-4 py-3 text-sm font-semibold text-[#C64E00]">Dashboard</a>
                </div>
            </details>
        </nav>
    </header>

    <section class="relative overflow-hidden border border-[#D6C0A8] bg-[#FFF9F1] shadow-[14px_14px_0_rgba(31,27,22,0.08)]">
        <div class="absolute inset-y-0 right-0 hidden w-1/2 bg-[#1F1B16] lg:block"></div>
        <div class="relative grid min-h-[620px] lg:grid-cols-[1.02fr_0.98fr]">
            <div class="flex flex-col justify-center px-6 py-16 sm:px-10 lg:px-12">
                <p class="animate-market-rise text-sm font-bold uppercase tracking-[0.34em] text-[#C64E00]">Orange marketplace</p>
                <h1 class="mt-5 max-w-3xl animate-market-rise text-5xl font-black tracking-tight text-[#1F1B16] sm:text-7xl" style="animation-delay: .08s">Sharp shopping, fast checkout.</h1>
                <p class="mt-6 max-w-2xl animate-market-rise text-base leading-8 text-[#654E38]" style="animation-delay: .16s">Browse curated goods, scan fresh arrivals, and move from product discovery to checkout without visual clutter.</p>
                <div class="mt-8 flex flex-wrap gap-3 animate-market-rise" style="animation-delay: .24s">
                    <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 bg-[#FF7A18] px-6 py-4 text-sm font-black text-white transition hover:bg-[#1F1B16]">
                        Start shopping
                        <svg class="h-4 w-4 animate-market-float" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14" />
                            <path d="m13 6 6 6-6 6" />
                        </svg>
                    </a>
                    <a href="#collections" class="inline-flex items-center border border-[#BFA98F] bg-white px-6 py-4 text-sm font-black text-[#1F1B16] transition hover:border-[#1F1B16]">View collections</a>
                </div>
            </div>

            <div class="relative min-h-[420px] overflow-hidden bg-[#1F1B16] p-6 text-white sm:p-10">
                <div class="absolute inset-x-0 top-28 h-px bg-white/20"></div>
                <div class="absolute inset-y-0 left-16 w-px bg-white/10"></div>
                <div class="absolute top-0 h-full w-16 bg-[#FF7A18]/70 animate-market-scan"></div>
                <div class="relative flex h-full flex-col justify-between border border-white/20 p-6">
                    <div class="flex items-start justify-between gap-6">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.3em] text-[#FFB47B]">Live catalog</p>
                            <p class="mt-4 text-6xl font-black">{{ count($products) }}</p>
                            <p class="mt-2 text-sm text-white/65">Products ready to browse</p>
                        </div>
                        <svg class="h-16 w-16 animate-market-draw text-[#FFB47B]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M4 7h16" />
                            <path d="M6 7v12h12V7" />
                            <path d="M9 7a3 3 0 0 1 6 0" />
                            <path d="M8 12h8" />
                            <path d="M8 16h5" />
                        </svg>
                    </div>
                    <div class="grid gap-3 sm:grid-cols-2">
                        <div class="border border-white/15 bg-white/5 p-4">
                            <p class="text-sm font-bold text-white">Fast search</p>
                            <p class="mt-2 text-sm leading-6 text-white/60">Find products by name, brand, or category.</p>
                        </div>
                        <div class="border border-white/15 bg-white/5 p-4">
                            <p class="text-sm font-bold text-white">Clean checkout</p>
                            <p class="mt-2 text-sm leading-6 text-white/60">Keep order review focused and direct.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section id="collections" class="space-y-6">
        <div class="flex flex-col gap-3 border-b border-[#D6C0A8] pb-5 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.3em] text-[#C64E00]">Featured products</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight text-[#1F1B16]">Popular items customers can act on</h2>
            </div>
            <div class="text-sm font-semibold text-[#6C553D]">All prices shown in USD.</div>
        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($products as $product)
                <article class="group overflow-hidden border border-[#D6C0A8] bg-white transition duration-300 hover:-translate-y-1 hover:shadow-[10px_10px_0_rgba(255,122,24,0.22)]">
                    <div class="relative aspect-[4/3] overflow-hidden bg-[#EFE0CF]">
                        <img src="{{ $product->image_url ? asset('storage/' . $product->image_url) : asset('images/placeholder.png') }}" alt="{{ $product->name }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" />
                        <span class="absolute left-3 top-3 bg-[#1F1B16] px-3 py-1 text-xs font-bold uppercase tracking-[0.2em] text-white">{{ $product->category }}</span>
                    </div>
                    <div class="space-y-4 p-5">
                        <div>
                            <h3 class="text-xl font-black text-[#1F1B16]">{{ $product->name }}</h3>
                            <p class="mt-2 line-clamp-2 text-sm leading-6 text-[#6D5536]">{{ $product->description }}</p>
                        </div>
                        <div class="flex items-center justify-between gap-3 border-t border-[#EFE0CF] pt-4 text-sm text-[#1F1B16]">
                            <span class="font-black">{{ $product->price }}</span>
                            <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 bg-[#FF7A18] px-4 py-2 text-xs font-black text-white transition hover:bg-[#1F1B16]">
                                View
                                <svg class="h-3.5 w-3.5 transition group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14" />
                                    <path d="m13 6 6 6-6 6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <section id="workflow" class="grid gap-5 lg:grid-cols-[1fr_360px]">
        <div class="border border-[#D6C0A8] bg-[#1F1B16] p-8 text-white">
            <p class="text-sm font-bold uppercase tracking-[0.3em] text-[#FFB47B]">Why shop with us</p>
            <h2 class="mt-4 max-w-2xl text-3xl font-black tracking-tight">A direct marketplace flow for browsing, comparing, and checkout.</h2>
            <ul class="mt-7 grid gap-4 text-base leading-7 text-white/72 md:grid-cols-3">
                <li class="border-l-4 border-[#FF7A18] pl-4">Curated product collections with strong visual scanning.</li>
                <li class="border-l-4 border-[#FF7A18] pl-4">Checkout and registration views aligned around action.</li>
                <li class="border-l-4 border-[#FF7A18] pl-4">Responsive layouts for desktop and mobile browsing.</li>
            </ul>
        </div>

        <div class="border border-[#D6C0A8] bg-white p-6">
            <p class="text-sm font-bold uppercase tracking-[0.3em] text-[#C64E00]">Highlights</p>
            <div class="mt-6 grid gap-4 text-sm text-[#6D5536]">
                <div class="border-l-4 border-[#FF7A18] bg-[#FFF8EF] p-5">
                    <p class="font-black text-[#1F1B16]">Checkout preview</p>
                    <p class="mt-2">A focused order summary with pricing that fits the marketplace theme.</p>
                </div>
                <div class="border-l-4 border-[#1F1B16] bg-[#FFF8EF] p-5">
                    <p class="font-black text-[#1F1B16]">Product discovery</p>
                    <p class="mt-2">A bright search experience helps customers find products quickly.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
