@extends('front.layouts.app')
@section('title', 'Dicky Adi Saputra - Frontend Developer')
@section('content')
<x-nav-guest />
<main class="flex flex-1 items-center min-h-screen">
    <div class="w-full flex justify-between items-center pl-[calc(((100%-1280px)/2)+75px)]">
        <div class="flex flex-col max-w-[500px] gap-[50px]">
            <div class="flex flex-col gap-[30px]">
                <div>
                    <h1 class="font-extrabold text-[50px] leading-[65px]">Tingkatkan Skills, <br>Get Higher Salary</h1>
                    <p class="leading-7 mt-[10px] text-obito-text-secondary">Asah skills dengan pembelajaran interaktif yang fleksible, efisien, dan mudah diakses sebagai penunjang mutu organisasimu*</p>
                </div>
                <div class="flex items-center gap-[18px]">
                    <a href="{{ route('register') }}" class="flex items-center rounded-full h-[67px] py-5 px-[30px] gap-[10px] bg-obito-green-500 hover:drop-shadow-effect transition-all duration-300">
                        <span class="text-white font-semibold text-lg">Get Started</span>
                    </a>
                    <a href="#" indexclass="flex items-center rounded-full h-[67px] border border-obito-grey py-5 px-[30px] bg-white gap-[10px] hover:border-obito-green-500 transition-all duration-300">
                        <img src="{{ asset('assets/images/icons/play-circle-fill.svg') }}" class="size-8 flex shrink-0" alt="icon">
                        <span class="font-semibold text-lg">How It Works</span>
                    </a>
                </div>
            </div>
        </div>
        <section class="flex flex-1 items-center py-5 px-5 pl-[calc(((100%-1280px)/2)+75px)]">
            <form method="POST" action="{{ route('login') }}" class="flex flex-col h-fit w-[510px] shrink-0 rounded-[20px] border border-obito-grey px-5 gap-5 bg-white" style="padding-bottom: 50px; padding-top: 50px;">
                @csrf
                <h1 class="font-bold items-center text-[22px] leading-[33px] mb-5">Welcome Back, <br>Let’s Upgrade Skills</h1>
                <div class="flex flex-col gap-2">
                    <p>Email Address</p>
                    <label class="relative group">
                        <input name="email" type="email"
                            class="appearance-none outline-none w-full rounded-full border border-obito-grey py-[14px] px-5 pl-12 font-semibold placeholder:font-normal placeholder:text-obito-text-secondary group-focus-within:border-obito-green transition-all duration-300"
                            placeholder="Type your valid email address">
                        <img src="assets/images/icons/sms.svg"
                            class="absolute size-5 flex shrink-0 transform -translate-y-1/2 top-1/2 left-5"
                            alt="icon">
                    </label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="flex flex-col gap-3">
                    <p>Password</p>
                    <label class="relative group">
                        <input name="password" type="password"
                            class="appearance-none outline-none w-full rounded-full border border-obito-grey py-[14px] px-5 pl-12 font-semibold placeholder:font-normal placeholder:text-obito-text-secondary group-focus-within:border-obito-green transition-all duration-300"
                            placeholder="Type your password">
                        <img src="assets/images/icons/shield-security.svg"
                            class="absolute size-5 flex shrink-0 transform -translate-y-1/2 top-1/2 left-5"
                            alt="icon">
                    </label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <a href="#" class="text-sm text-obito-green hover:underline">Forgot My Password</a>
                </div>
                <button type="submit"
                    class="flex items-center justify-center gap-[10px] rounded-full py-[14px] px-5 bg-obito-green-500 hover:drop-shadow-effect transition-all duration-300">
                    <span class="font-semibold text-white">Sign In</span>
                </button>
            </form>
        </section>
    </div>
</main>
@endsection