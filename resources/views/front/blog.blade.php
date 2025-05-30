@extends('front.layouts.app')
@section('title', 'Dicky Adi Saputra - Frontend Developer')
@section('content')
<x-nav-guest />

<main class="max-w-7xl mx-auto px-6 flex flex-col justify-center min-h-screen">
      <section class="py-16 px-6">
            <div class="max-w-7xl mx-auto text-center">
                  <h2 class="text-3xl font-bold text-gray-900 mb-4">Berita Terkini</h2>
                  <p class="text-gray-500 max-w-2xl mx-auto mb-12">
                        Unlock the Potential of Innovation. Discover the Advanced AI Tools Transforming Your Ideas into Reality with Unmatched Precision and Intelligence.
                  </p>

                  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                              <div class="flex items-center mb-4">
                                    <div class="bg-gradient-to-br from-purple-400 to-purple-600 p-3 rounded-full shadow-lg">
                                          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M12 4V1m0 22v-3m8.485-8.485l2.121-2.121M1.393 21.607l2.121-2.121M4 12H1m22 0h-3m-1.393-7.607l2.121 2.121M2.121 2.121L4.242 4.242" />
                                                <circle cx="12" cy="12" r="5" />
                                          </svg>
                                    </div>
                              </div>
                              <h3 class="font-semibold text-lg text-gray-800 mb-2">Seamless Content Creation AI</h3>
                              <p class="text-sm text-gray-600">
                                    Let our AI-powered service simplify your content creation process. Start using AI today!
                              </p>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                              <div class="flex items-center mb-4">
                                    <div class="bg-gradient-to-br from-purple-400 to-purple-600 p-3 rounded-full shadow-lg">
                                          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M12 4V1m0 22v-3m8.485-8.485l2.121-2.121M1.393 21.607l2.121-2.121M4 12H1m22 0h-3m-1.393-7.607l2.121 2.121M2.121 2.121L4.242 4.242" />
                                                <circle cx="12" cy="12" r="5" />
                                          </svg>
                                    </div>
                              </div>
                              <h3 class="font-semibold text-lg text-gray-800 mb-2">Your Ideas, Powered by Our Technology</h3>
                              <p class="text-sm text-gray-600">
                                    Discover how AI can transform your ideas into captivating content with our high-quality service.
                              </p>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                              <div class="flex items-center mb-4">
                                    <div class="bg-gradient-to-br from-purple-400 to-purple-600 p-3 rounded-full shadow-lg">
                                          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M12 4V1m0 22v-3m8.485-8.485l2.121-2.121M1.393 21.607l2.121-2.121M4 12H1m22 0h-3m-1.393-7.607l2.121 2.121M2.121 2.121L4.242 4.242" />
                                                <circle cx="12" cy="12" r="5" />
                                          </svg>
                                    </div>
                              </div>
                              <h3 class="font-semibold text-lg text-gray-800 mb-2">Intelligent Writing by Powerful AI</h3>
                              <p class="text-sm text-gray-600">
                                    Effortlessly access AI-generated content for your blogs, websites, and more with our high-quality, convenient service.
                              </p>
                        </div>

                        <!-- Card 4 -->
                        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                              <div class="flex items-center mb-4">
                                    <div class="bg-gradient-to-br from-purple-400 to-purple-600 p-3 rounded-full shadow-lg">
                                          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M12 4V1m0 22v-3m8.485-8.485l2.121-2.121M1.393 21.607l2.121-2.121M4 12H1m22 0h-3m-1.393-7.607l2.121 2.121M2.121 2.121L4.242 4.242" />
                                                <circle cx="12" cy="12" r="5" />
                                          </svg>
                                    </div>
                              </div>
                              <h3 class="font-semibold text-lg text-gray-800 mb-2">AI Generation Made Life Easier</h3>
                              <p class="text-sm text-gray-600">
                                    Experience effortless content creation with our AI service. Write less, accomplish more.
                              </p>
                        </div>

                        <!-- Card 5 -->
                        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                              <div class="flex items-center mb-4">
                                    <div class="bg-gradient-to-br from-purple-400 to-purple-600 p-3 rounded-full shadow-lg">
                                          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M12 4V1m0 22v-3m8.485-8.485l2.121-2.121M1.393 21.607l2.121-2.121M4 12H1m22 0h-3m-1.393-7.607l2.121 2.121M2.121 2.121L4.242 4.242" />
                                                <circle cx="12" cy="12" r="5" />
                                          </svg>
                                    </div>
                              </div>
                              <h3 class="font-semibold text-lg text-gray-800 mb-2">Premium AI-Generated Content</h3>
                              <p class="text-sm text-gray-600">
                                    Get expertly crafted content in no time with our AI service. Where quality meets speed.
                              </p>
                        </div>

                        <!-- Card 6 -->
                        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                              <div class="flex items-center mb-4">
                                    <div class="bg-gradient-to-br from-purple-400 to-purple-600 p-3 rounded-full shadow-lg">
                                          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M12 4V1m0 22v-3m8.485-8.485l2.121-2.121M1.393 21.607l2.121-2.121M4 12H1m22 0h-3m-1.393-7.607l2.121 2.121M2.121 2.121L4.242 4.242" />
                                                <circle cx="12" cy="12" r="5" />
                                          </svg>
                                    </div>
                              </div>
                              <h3 class="font-semibold text-lg text-gray-800 mb-2">Super Fast AI Writing Companion</h3>
                              <p class="text-sm text-gray-600">
                                    Partner with AI to create content that connects with your audience. Give it a try now.
                              </p>
                        </div>
                  </div>
            </div>
      </section>

</main>

@endsection