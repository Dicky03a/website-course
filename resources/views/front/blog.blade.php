@extends('front.layouts.app')
@section('title', 'Dicky Adi Saputra - Frontend Developer')
@section('content')
<x-nav-guest />

<main class="max-w-7xl mx-auto px-6 flex flex-col justify-center min-h-screen">
      <div class="w-full flex justify-between items-center pl-[calc(((100%-1280px)/2)+75px)]">
            <div class="flex flex-col max-w-[500px] gap-[50px]">
                  <div class="flex flex-col gap-[30px]">
                        <p class="flex items-center gap-[6px] w-fit rounded-full py-2 px-[14px] bg-obito-light-green">
                              <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="flex shrink-0 w-5" alt="icon">
                              <span class="font-bold text-sm">TRUSTED BY 500 FORTUNE ANGGA COMPANIES</span>
                        </p>
                        <div>
                              <h1 class="font-extrabold text-[50px] leading-[65px]">Tingkatkan Skills, <br>Get Higher Salary</h1>
                              <p class="leading-7 mt-[10px] text-obito-text-secondary">Materi terbaru disusun oleh professional dan perusahaan besar agar lebih sesuai kebutuhan dan anda lorem dolorsi.</p>
                        </div>
                        <div class="flex items-center gap-[18px]">
                              <a href="{{ route('register') }}" class="flex items-center rounded-full h-[67px] py-5 px-[30px] gap-[10px] bg-obito-green hover:drop-shadow-effect transition-all duration-300">
                                    <span class="text-white font-semibold text-lg">Get Started</span>
                              </a>
                              <a href="#" indexclass="flex items-center rounded-full h-[67px] border border-obito-grey py-5 px-[30px] bg-white gap-[10px] hover:border-obito-green transition-all duration-300">
                                    <img src="{{ asset('assets/images/icons/play-circle-fill.svg') }}" class="size-8 flex shrink-0" alt="icon">
                                    <span class="font-semibold text-lg">How It Works</span>
                              </a>
                        </div>
                  </div>
                  <div class="flex items-center gap-[14px]">
                        <img src="{{ asset('assets/images/photos/group.png') }}" class="flex shrink-0 h-[50px]" alt="group photo">
                        <div>
                              <div class="flex gap-1 items-center">
                                    <div class="flex">
                                          <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                                          <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                                          <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                                          <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                                          <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                                    </div>
                                    <span class="font-bold">5.0</span>
                              </div>
                              <p class="font-bold mt-1">Join Millions Developer</p>
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
                              class="flex items-center justify-center gap-[10px] rounded-full py-[14px] px-5 bg-obito-green hover:drop-shadow-effect transition-all duration-300">
                              <span class="font-semibold text-white">Sign In</span>
                        </button>
                  </form>
            </section>
      </div>
</main>

@endsection