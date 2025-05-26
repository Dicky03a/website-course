@extends('front.layouts.app')
@section('title', 'Dicky Adi Saputra - Frontend Developer')
@section('content')
<x-nav-guest />
<main class="items-center py-[70px] min-h-screen">
      <section class="max-w-6xl mt-20 mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <!-- Left content -->
            <div>
                  <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Look What Our <br /> Customers Say!
                  </h2>
                  <p class="text-gray-600 mb-4">
                        Fusce venenatis tellus a felis scelerisque, non pulvinar est pellentesque.
                  </p>
                  <!-- <hr class="my-2 border-t-2 border-gray-200"> -->
                  <div class="flex gap-3 border-2 border-gray-200 rounded-full p-2 items-center justify-center mx-auto">
                        <h2 class="text-lg font-semibold">Professional</h2>
                        <div class="border-l-2 border-gray-300 h-6 mx-3"></div>
                        <h2 class="text-lg font-semibold">Religius</h2>
                        <div class="border-l-2 border-gray-300 h-6 mx-3"></div>
                        <h2 class="text-lg font-semibold">Moderat</h2>
                  </div>
            </div>

            <!-- Testimonial Card -->
            <div>
                  <div class="relative bg-white shadow-lg rounded-xl p-6">
                        <!-- Quotation Mark -->
                        <div class="absolute top-0 left-0 transform -translate-x-4 -translate-y-4">
                              <img src="assets/images/icons/petik.svg" alt="">
                        </div>

                        <p class="text-gray-700 mb-4">
                              I highly recommend Jodi J. Appleby. She was attentive to our needs and worked
                              tirelessly to find us the perfect home. We couldn’t be happier with our new
                              place!
                        </p>

                        <div class="flex items-center justify-between mt-4">
                              <div class="flex items-center gap-3">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-10 h-10 rounded-full" />
                                    <span class="font-medium text-gray-800">Barbara D. Smith</span>
                              </div>
                              <div class="flex text-yellow-400 text-sm">
                                    ★★★★★
                              </div>
                        </div>
                  </div>
            </div>
      </section>

      <!-- Call to Action Section -->
      <section class="bg-gradient-to-r bg-obito-green-500 text-white px-6 py-12 rounded-3xl max-w-6xl mx-auto mt-16 overflow-hidden relative">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-6">
                  <!-- Image -->
                  <div class="relative">
                        <img
                              src="https://randomuser.me/api/portraits/men/75.jpg"
                              alt="Agent"
                              class="w-40 h-40 object-cover rounded-full md:rounded-none md:w-auto md:h-auto md:absolute md:-left-20 md:bottom-0" />
                  </div>

                  <!-- Text and Button -->
                  <div>
                        <h3 class="text-2xl font-bold mb-2">Become a Agent.</h3>
                        <p class="mb-4">Fusce venenatis tellus a felis scelerisque, venenatis tellus a felis scelerisque.</p>
                        <button class="bg-white text-obito-green-500 font-semibold px-5 py-2 rounded-full shadow hover:bg-gray-100 transition">
                              Register Now
                        </button>
                  </div>
            </div>
      </section>
</main>

@endsection