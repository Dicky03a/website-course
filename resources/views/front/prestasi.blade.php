@extends('front.layouts.app')
@section('title', 'Obito BuildWithAngga')
@section('content')
<x-nav-guest />

<main>
      <section class="max-w-7xl mx-auto mt-20 px-6 py-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-10">
                  Prestasi Unggul ORMAWA <br />
                  UNUGIRI
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                  <!-- Card 1 -->
                  <div class="relative rounded-xl overflow-hidden shadow">
                        <img
                              src="https://source.unsplash.com/400x300/?house"
                              alt="New York"
                              class="w-full h-48 object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-end p-4 text-white">
                              <span class="text-2xl font-bold">Juara 1</span>
                              <span class="text-sm">22 Maret 2005</span>
                        </div>
                  </div>

                  <!-- Card 2 -->
                  <div class="relative rounded-xl overflow-hidden shadow">
                        <img
                              src="https://source.unsplash.com/400x300/?city,buildings"
                              alt="Houston"
                              class="w-full h-48 object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-end p-4 text-white">
                              <span class="text-2xl font-bold">Juara 1</span>
                              <span class="text-sm">22 Maret 2005</span>
                        </div>
                  </div>

                  <!-- Card 3 -->
                  <div class="relative rounded-xl overflow-hidden shadow">
                        <img
                              src="https://source.unsplash.com/400x300/?luxury,pool"
                              alt="San Diego"
                              class="w-full h-48 object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-end p-4 text-white">
                              <span class="text-2xl font-bold">Juara 1</span>
                              <span class="text-sm">22 Maret 2005</span>
                        </div>
                  </div>

                  <!-- Card 4 -->
                  <div class="relative rounded-xl overflow-hidden shadow">
                        <img
                              src="https://source.unsplash.com/400x300/?skyscraper"
                              alt="Philadelphia"
                              class="w-full h-48 object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-end p-4 text-white">
                              <span class="text-2xl font-bold">Juara 1</span>
                              <span class="text-sm">22 Maret 2005</span>
                        </div>
                  </div>

                  <!-- Card 5 -->
                  <div class="relative rounded-xl overflow-hidden shadow">
                        <img
                              src="https://source.unsplash.com/400x300/?modern,house"
                              alt="San Francisco"
                              class="w-full h-48 object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-end p-4 text-white">
                              <span class="text-2xl font-bold">Juara 1</span>
                              <span class="text-sm">22 Maret 2005A</span>
                        </div>
                  </div>
            </div>
      </section>
</main>

@endsection