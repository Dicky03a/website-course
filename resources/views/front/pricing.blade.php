@extends('front.layouts.app')
@section('title', 'Pricing - Obito BuildWithAngga')

@section('content')
<x-nav-guest />
<main class="flex flex-col flex-1 justify-center">
    <section class="max-w-7xl mx-auto px-6 flex flex-col justify-center min-h-screen">
        <div class="flex flex-col items-center mb-10 gap-[10px] max-w-[500px] w-full">
            <p class="flex items-center gap-[6px] w-fit rounded-full py-2 px-[14px] bg-obito-light-green">
                <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="flex shrink-0 w-5" alt="icon">
                <span class="font-bold text-sm">UNLOCK PRO JOURNEY</span>
            </p>
            <h1 class="font-bold text-[28px] leading-[42px] text-center">Pricing For Everyone</h1>
            <p class="leading-[28px] text-obito-text-secondary text-center">Harga yang kami tetapkan tergolong murah
                namun mentor tetap memberikan kualitas standard internasional</p>
        </div>
        <div class="flex items-center gap-5">
            @foreach($pricing_packages as $package)
            <div
                class="price-card-popular flex flex-col h-fit w-full max-w-[314px] shrink-0 rounded-[20px] border-2 border-obito-green gap-5 bg-white overflow-hidden">
                <p class="popular-badge text-center font-semibold text-white py-[6px] bg-obito-green-500">Most Popular
                    Package</p>
                <div class="flex flex-col gap-5 p-5 pt-0">
                    <div class="flex items-center gap-[14px]">
                        <img src="{{ asset('assets/images/icons/cup-green-fill.svg') }}" class="flex w-[60px] shrink-0" alt="icon">
                        <h2 class="font-bold text-[22px] leading-[33px]">{{ $package->name }}</h2>
                    </div>
                    <div class="price">
                        <p class="font-bold text-[32px] leading-[48px]">
                            Rp {{ number_format($package->price, 0, '', '.') }}
                        </p>
                        <p class="mt-[6px] text-obito-text-secondary">{{ $package->duration }} months duration</p>
                    </div>
                    <hr class="border-obito-grey">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-4">
                            <p class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" class="flex shrink-0" alt="icon">
                                <span class="font-semibold">Materi</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" class="flex shrink-0" alt="icon">
                                <span class="font-semibold">Get Premium Certifications</span>
                            </p>
                        </div>
                    </div>
                    <hr class="border-obito-grey">
                    @if ($user && $package->isSubscribedByUser($user->id))
                    <a href="#"
                        class="w-full h-11 rounded-full py-[10px] px-5 gap-[10px] bg-obito-green-500 text-center hover:drop-shadow-effect transition-all duration-300">
                        <span class="font-semibold text-white">You've Subscribed</span>
                    </a>
                    @else
                    <a href="{{ route('front.checkout', $package) }}"
                        class="w-full h-11 rounded-full py-[10px] px-5 gap-[10px] bg-obito-green-500 text-center hover:drop-shadow-effect transition-all duration-300">
                        <span class="font-semibold text-white">Get Pro</span>
                    </a>
                    @endif
                </div>
            </div>
            @endforeach

            <!-- <div
                class="price-card-reguler flex flex-col h-fit w-full max-w-[314px] shrink-0 rounded-[20px] p-5 border border-obito-grey gap-5 bg-white">
                <div class="flex items-center gap-[14px]">
                    <img src="{{ asset('assets/images/icons/buildings-green-fill.svg') }}" class="flex w-[60px] shrink-0"
                        alt="icon">
                    <h2 class="font-bold text-[22px] leading-[33px]">Business</h2>
                </div>
                <hr class="border-obito-grey">
                <div class="price">
                    <p class="font-bold text-lg leading-[27px]">Customizing easily without paying too much money</p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="leading-7 text-obito-text-secondary">Kami bantu siapkan materi ajar sesuai kebutuhan
                        pertumbuhan perusahaan anda saat ini.</p>
                </div>
                <hr class="border-obito-grey">
                <a href="#"
                    class="w-full h-11 rounded-full pt-[10px] px-5 gap-[10px] bg-white text-center border border-obito-grey hover:border-obito-green transition-all duration-300">
                    <span class="font-semibold">Contact Sales</span>
                </a>
            </div> -->
        </div>
    </section>
</main>
@endsection