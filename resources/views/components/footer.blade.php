<!doctype html>
<html>

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="{{ asset('css/output.css') }}" rel="stylesheet">
      @stack('after-styles')
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
      <title>@yield('title')</title>
      <meta name="description" content="Obito is an innovative online learning platform that empowers students and professionals with high-quality, accessible courses.">

      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logos/logo-64.png') }}">
      <link rel="apple-touch-icon" href="assets/images/logos/logo-64.png') }}">

      <!-- Open Graph Meta Tags -->
      <meta property="og:title" content="Obito Online Learning Platform - Learn Anytime, Anywhere">
      <meta property="og:description" content="Obito is an innovative online learning platform that empowers students and professionals with high-quality, accessible courses.">
      <meta property="og:image" content="https://obito-platform.netlify.app/assets/images/logos/logo-64-big.png') }}">
      <meta property="og:url" content="https://obito-platform.netlify.app">
      <meta property="og:type" content="website">
</head>

<body>

      <footer class="bg-[#f4f6ff] text-gray-700">
            <div class="max-w-7xl mx-auto py-12 px-6 grid grid-cols-1 md:grid-cols-4 gap-8">

                  <!-- Company Info -->
                  <div>
                        <div class="flex items-center mb-4">
                              <div class="bg-purple-700 text-white w-8 h-8 flex items-center justify-center rounded-full mr-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                          <path d="M3 10l1-2m0 0l9-4 9 4-9 4-9-4zm0 0v6a9 9 0 0018 0v-6" />
                                    </svg>
                              </div>
                              <span class="font-bold text-lg">Rezilla</span>
                        </div>
                        <p class="text-sm">2728 Hickory Street<br>Salt Lake City, UT 84104</p>
                        <p class="text-sm mt-2">📞 +1 206-214-2298</p>
                        <p class="text-sm">✉️ support@rezilla.com</p>
                  </div>

                  <!-- Quick Links -->
                  <div>
                        <h4 class="font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-2 text-sm">
                              <li><a href="#" class="hover:underline">Home</a></li>
                              <li><a href="#" class="hover:underline">About</a></li>
                              <li><a href="#" class="hover:underline">Listings</a></li>
                              <li><a href="#" class="hover:underline">Services</a></li>
                              <li><a href="#" class="hover:underline">Blogs</a></li>
                              <li><a href="#" class="hover:underline">Become a Agent</a></li>
                        </ul>
                  </div>

                  <!-- Discovery -->
                  <div>
                        <h4 class="font-semibold mb-4">Discovery</h4>
                        <ul class="space-y-2 text-sm">
                              <li><a href="#" class="hover:underline">Canada</a></li>
                              <li><a href="#" class="hover:underline">United States</a></li>
                              <li><a href="#" class="hover:underline">Germany</a></li>
                              <li><a href="#" class="hover:underline">Africa</a></li>
                              <li><a href="#" class="hover:underline">India</a></li>
                        </ul>
                  </div>

                  <!-- Newsletter & Socials -->
                  <div>
                        <h4 class="font-semibold mb-4">Subscribe to our Newsletter!</h4>
                        <div class="flex items-center bg-white rounded-full overflow-hidden shadow-sm mb-4">
                              <input type="email" placeholder="Email Address" class="px-4 py-2 text-sm w-full focus:outline-none">
                              <button class="bg-purple-700 text-white px-4 py-2 rounded-full">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                          <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                              </button>
                        </div>
                        <p class="text-sm font-semibold mb-2">Follow Us on</p>
                        <div class="flex space-x-4 text-purple-700">
                              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                              <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                              <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                  </div>
            </div>

            <!-- Bottom bar -->
            <div class="bg-black text-white text-xs py-4 px-6 flex flex-col md:flex-row justify-between items-center">
                  <p>© Rezilla – All rights reserved</p>
                  <div class="flex space-x-4 mt-2 md:mt-0">
                        <a href="#" class="hover:underline">Terms and Conditions</a>
                        <a href="#" class="hover:underline">Privacy Policy</a>
                        <a href="#" class="hover:underline">Disclaimer</a>
                  </div>
            </div>
      </footer>

      <!-- Font Awesome (for social icons) -->
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</body>

</html>