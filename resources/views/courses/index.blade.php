@extends('front.layouts.app')
@section('title', 'My Courses - Obito BuildWithAngga')
@section('content')
<x-navigation-auth />
<nav id="bottom-nav" class="flex w-full bg-white border-b border-obito-grey mb-5 py-[14px]">
    <ul class="flex w-full max-w-[1280px] px-[75px] mx-auto gap-3">
        <li class="group">
            <a href="#"
                class="flex items-center gap-2 rounded-full border border-obito-grey py-2 px-[14px] hover:border-obito-green bg-white transition-all duration-300 group-[.active]:bg-obito-green-500 group-[.active]:border-obito-light-green">
                <img src="{{ asset('assets/images/icons/home-trend-up.svg') }}" class="flex shrink-0 w-5" alt="icon">
                <span>Overview</span>
            </a>
        </li>
        <li class="group active">
            <a href="#"
                class="flex items-center gap-2 rounded-full border border-obito-grey py-2 px-[14px] hover:border-obito-green bg-white transition-all duration-300 group-[.active]:bg-obito-green-500 group-[.active]:border-obito-light-green">
                <img src="{{ asset('assets/images/icons/note-favorite.svg') }}" class="flex shrink-0 w-5" alt="icon">
                <span class="text-white">Courses</span>
            </a>
        </li>
        <li class="group">
            <a href="#"
                class="flex items-center gap-2 rounded-full border border-obito-grey py-2 px-[14px] hover:border-obito-green bg-white transition-all duration-300 group-[.active]:bg-obito-green-500 group-[.active]:border-obito-light-green">
                <img src="{{ asset('assets/images/icons/message-programming.svg') }}" class="flex shrink-0 w-5" alt="icon">
                <span>Quizzess</span>
            </a>
        </li>
        <li class="group">
            <a href="#"
                class="flex items-center gap-2 rounded-full border border-obito-grey py-2 px-[14px] hover:border-obito-green bg-white transition-all duration-300 group-[.active]:bg-obito-green-500 group-[.active]:border-obito-light-green">
                <img src="{{ asset('assets/images/icons/cup.svg') }}" class="flex shrink-0 w-5" alt="icon">
                <span>Certificates</span>
            </a>
        </li>
        <li class="group">
            <a href="#"
                class="flex items-center gap-2 rounded-full border border-obito-grey py-2 px-[14px] hover:border-obito-green bg-white transition-all duration-300 group-[.active]:bg-obito-green-500 group-[.active]:border-obito-light-green">
                <img src="{{ asset('assets/images/icons/ruler&pen.svg') }}" class="flex shrink-0 w-5" alt="icon">
                <span>Portfolios</span>
            </a>
        </li>
    </ul>
</nav>

<section id="catalog" class="flex flex-col w-full max-w-[1280px] px-[75px] gap-4 mx-auto">
    <h1 class="font-bold text-[22px] leading-[33px]">Course</h1>
    <div id="tabs-container" class="flex items-center gap-3">

        @foreach ($coursesByCategory as $category => $courses)
        <button type="button" class="tab-btn group {{ $loop->first ? 'active' : '' }}"
            data-target="{{ Str::slug($category) }}-content">
            <p class="rounded-full border border-obito-grey py-2 px-4 hover:border-obito-green-500 bg-obito-green-500 transition-all duration-300 group-[.active]:bg-obito-black">
                <span class="group-[.active]:font-semibold group-[.active]:text-white">
                    {{ $category }}
                </span>
            </p>
        </button>
        @endforeach


    </div>
    <div id="tabs-content-container" class="mt-1">

        @foreach ($coursesByCategory as $category => $courses)
        <div id="{{ Str::slug($category) }}-content" class="{{ $loop->first ? '' : 'hidden' }} tab-content grid grid-cols-4 gap-5">
            @forelse($courses as $course)
            <x-course-card :course="$course" />

            @empty
            <p>belum ada kelas pada kategori ini</p>
            @endforelse


        </div>
        @endforeach

    </div>
</section>
</main>


@endsection

@push('after-scripts')
{{-- <script src="{{ asset('js/dropdown-navbar.js') }}"></script> --}}
<script src="{{ asset('js/tabs.js') }}"></script>
@endpush