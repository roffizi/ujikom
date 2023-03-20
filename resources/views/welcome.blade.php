<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laundry Bahari</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style> --}}

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    {{-- <body class="antialiased">

            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <div class="w-full object-fill" >
                    <img src="{{ asset('image/l.png') }}" alt="" class="w-full">
                </div>
            </div>
    </body> --}}

    <body class="text-gray-800 antialiased">
        <nav
          class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 "
        >
          <div
            class="container px-4 mx-auto flex flex-wrap items-center justify-between"
          >
            <div
              class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
            >
              <a
                class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                href="/"
                >Laundry Bahari</a
              ><button
                class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                type="button"
                onclick="toggleNavbar('example-collapse-navbar')"
              >
                <i class="text-white fas fa-bars"></i>
              </button>
            </div>
            <div
              class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
              id="example-collapse-navbar"
            >
              <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                @if (Route::has('login'))
                        @auth
                          <li class="flex items-center">
                            <a href="{{ route('dashboard') }}"
                              class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                              type="button"
                              style="transition: all 0.15s ease 0s;"
                            >
                              Dashboard
                            </a>
                          </li>
                          <li class="flex items-center">
                            <form action="{{ route('logout') }}" method="post">
                              @csrf
                              <button
                                type="submit"
                                class="text-white lg:hover:text-gray-300 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                >
                                Logout</button>
                            </form>
                          </li>
                        @else
                          <li class="flex items-center">
                            <a href="{{ route('login') }}"
                              class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                              type="button"
                              style="transition: all 0.15s ease 0s;"
                            >
                              Login
                            </a>
                          </li>
                            @if (Route::has('register'))
                              <li class="flex items-center">
                                <a
                                  class="text-white lg:hover:text-gray-300 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                  href="{{ route('register') }}"
                                  >
                                  Register</a
                                >
                              </li>
                            @endif
                        @endauth
                @endif
                
                
              </ul>
            </div>
          </div>
        </nav>
        <main>
          <div
            class="relative pt-16 pb-32 flex content-center items-center justify-center"
            style="min-height: 75vh;"
          >
            <div
              class="absolute top-0 w-full h-full bg-center bg-cover"
              style='background-image: url("{{ asset('images/ln.png') }}");'
            >
              <span
                id="blackOverlay"
                class="w-full h-full absolute opacity-75 bg-black"
              ></span>
            </div>
            <div class="container relative mx-auto">
              <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                  <div class="pr-12">
                    <h1 class="text-white font-semibold text-5xl">
                        Laundry Bahari
                    </h1>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
              style="height: 70px;"
            >
              <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
              >
                <polygon
                  class="text-gray-300 fill-current"
                  points="2560 0 2560 100 0 100"
                ></polygon>
              </svg>
            </div>
          </div>
          {{-- <section class="pb-20 bg-gray-300 -mt-24">
            <div class="container mx-auto px-4">
              <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                  <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                  >
                    <div class="px-4 py-5 flex-auto">
                      <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                      >
                        <i class="fas fa-award"></i>
                      </div>
                      <h6 class="text-xl font-semibold">Awarded Agency</h6>
                      <p class="mt-2 mb-4 text-gray-600">
                        Divide details about your product or agency work into parts.
                        A paragraph describing a feature will be enough.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-4/12 px-4 text-center">
                  <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                  >
                    <div class="px-4 py-5 flex-auto">
                      <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                      >
                        <i class="fas fa-retweet"></i>
                      </div>
                      <h6 class="text-xl font-semibold">Free Revisions</h6>
                      <p class="mt-2 mb-4 text-gray-600">
                        Keep you user engaged by providing meaningful information.
                        Remember that by this time, the user is curious.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                  <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                  >
                    <div class="px-4 py-5 flex-auto">
                      <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                      >
                        <i class="fas fa-fingerprint"></i>
                      </div>
                      <h6 class="text-xl font-semibold">Verified Company</h6>
                      <p class="mt-2 mb-4 text-gray-600">
                        Write a few lines about each one. A paragraph describing a
                        feature will be enough. Keep you user engaged!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-wrap items-center mt-32">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                  <div
                    class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
                  >
                    <i class="fas fa-user-friends text-xl"></i>
                  </div>
                  <h3 class="text-3xl mb-2 font-semibold leading-normal">
                    Working with us is a pleasure
                  </h3>
                  <p
                    class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
                  >
                    Don't let your uses guess by attaching tooltips and popoves to
                    any element. Just make sure you enable them first via
                    JavaScript.
                  </p>
                  <p
                    class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
                  >
                    The kit comes with three pre-built pages to help you get started
                    faster. You can change the text and images and you're good to
                    go. Just make sure you enable them first via JavaScript.
                  </p>
                  <a
                    href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
                    class="font-bold text-gray-800 mt-8"
                    >Check Tailwind Starter Kit!</a
                  >
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                  <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600"
                  >
                    <img
                      alt="..."
                      src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                      class="w-full align-middle rounded-t-lg"
                    />
                    <blockquote class="relative p-8 mb-4">
                      <svg
                        preserveAspectRatio="none"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 583 95"
                        class="absolute left-0 w-full block"
                        style="height: 95px; top: -94px;"
                      >
                        <polygon
                          points="-30,95 583,95 583,65"
                          class="text-pink-600 fill-current"
                        ></polygon>
                      </svg>
                      <h4 class="text-xl font-bold text-white">
                        Top Notch Services
                      </h4>
                      <p class="text-md font-light mt-2 text-white">
                        The Arctic Ocean freezes every winter and much of the
                        sea-ice then thaws every summer, and that process will
                        continue whatever happens.
                      </p>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="relative py-20">
            <div
              class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
              style="height: 80px;"
            >
              <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
              >
                <polygon
                  class="text-white fill-current"
                  points="2560 0 2560 100 0 100"
                ></polygon>
              </svg>
            </div>
            <div class="container mx-auto px-4">
              <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                  <img
                    alt="..."
                    class="max-w-full rounded-lg shadow-lg"
                    src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                  />
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                  <div class="md:pr-12">
                    <div
                      class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300"
                    >
                      <i class="fas fa-rocket text-xl"></i>
                    </div>
                    <h3 class="text-3xl font-semibold">A growing company</h3>
                    <p class="mt-4 text-lg leading-relaxed text-gray-600">
                      The extension comes with three pre-built pages to help you get
                      started faster. You can change the text and images and you're
                      good to go.
                    </p>
                    <ul class="list-none mt-6">
                      <li class="py-2">
                        <div class="flex items-center">
                          <div>
                            <span
                              class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                              ><i class="fas fa-fingerprint"></i
                            ></span>
                          </div>
                          <div>
                            <h4 class="text-gray-600">
                              Carefully crafted components
                            </h4>
                          </div>
                        </div>
                      </li>
                      <li class="py-2">
                        <div class="flex items-center">
                          <div>
                            <span
                              class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                              ><i class="fab fa-html5"></i
                            ></span>
                          </div>
                          <div>
                            <h4 class="text-gray-600">Amazing page examples</h4>
                          </div>
                        </div>
                      </li>
                      <li class="py-2">
                        <div class="flex items-center">
                          <div>
                            <span
                              class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                              ><i class="far fa-paper-plane"></i
                            ></span>
                          </div>
                          <div>
                            <h4 class="text-gray-600">Dynamic components</h4>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="pt-20 pb-48">
            <div class="container mx-auto px-4">
              <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                  <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                  <p class="text-lg leading-relaxed m-4 text-gray-600">
                    According to the National Oceanic and Atmospheric
                    Administration, Ted, Scambos, NSIDClead scentist, puts the
                    potentially record maximum.
                  </p>
                </div>
              </div>
              <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                  <div class="px-6">
                    <img
                      alt="..."
                      src="./assets/img/team-1-800x800.jpg"
                      class="shadow-lg rounded-full max-w-full mx-auto"
                      style="max-width: 120px;"
                    />
                    <div class="pt-6 text-center">
                      <h5 class="text-xl font-bold">Ryan Tompson</h5>
                      <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                        Web Developer
                      </p>
                      <div class="mt-6">
                        <button
                          class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-twitter"></i></button
                        ><button
                          class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-facebook-f"></i></button
                        ><button
                          class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-dribbble"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                  <div class="px-6">
                    <img
                      alt="..."
                      src="./assets/img/team-2-800x800.jpg"
                      class="shadow-lg rounded-full max-w-full mx-auto"
                      style="max-width: 120px;"
                    />
                    <div class="pt-6 text-center">
                      <h5 class="text-xl font-bold">Romina Hadid</h5>
                      <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                        Marketing Specialist
                      </p>
                      <div class="mt-6">
                        <button
                          class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-google"></i></button
                        ><button
                          class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-facebook-f"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                  <div class="px-6">
                    <img
                      alt="..."
                      src="./assets/img/team-3-800x800.jpg"
                      class="shadow-lg rounded-full max-w-full mx-auto"
                      style="max-width: 120px;"
                    />
                    <div class="pt-6 text-center">
                      <h5 class="text-xl font-bold">Alexa Smith</h5>
                      <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                        UI/UX Designer
                      </p>
                      <div class="mt-6">
                        <button
                          class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-google"></i></button
                        ><button
                          class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-twitter"></i></button
                        ><button
                          class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-instagram"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                  <div class="px-6">
                    <img
                      alt="..."
                      src="./assets/img/team-4-470x470.png"
                      class="shadow-lg rounded-full max-w-full mx-auto"
                      style="max-width: 120px;"
                    />
                    <div class="pt-6 text-center">
                      <h5 class="text-xl font-bold">Jenna Kardi</h5>
                      <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                        Founder and CEO
                      </p>
                      <div class="mt-6">
                        <button
                          class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-dribbble"></i></button
                        ><button
                          class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-google"></i></button
                        ><button
                          class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-twitter"></i></button
                        ><button
                          class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                        >
                          <i class="fab fa-instagram"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="pb-20 relative block bg-gray-900">
            <div
              class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
              style="height: 80px;"
            >
              <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
              >
                <polygon
                  class="text-gray-900 fill-current"
                  points="2560 0 2560 100 0 100"
                ></polygon>
              </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
              <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                  <h2 class="text-4xl font-semibold text-white">Build something</h2>
                  <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                    Put the potentially record low maximum sea ice extent tihs year
                    down to low ice. According to the National Oceanic and
                    Atmospheric Administration, Ted, Scambos.
                  </p>
                </div>
              </div>
              <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                  <div
                    class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                  >
                    <i class="fas fa-medal text-xl"></i>
                  </div>
                  <h6 class="text-xl mt-5 font-semibold text-white">
                    Excelent Services
                  </h6>
                  <p class="mt-2 mb-4 text-gray-500">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                  </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                  <div
                    class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                  >
                    <i class="fas fa-poll text-xl"></i>
                  </div>
                  <h5 class="text-xl mt-5 font-semibold text-white">
                    Grow your market
                  </h5>
                  <p class="mt-2 mb-4 text-gray-500">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                  </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                  <div
                    class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                  >
                    <i class="fas fa-lightbulb text-xl"></i>
                  </div>
                  <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
                  <p class="mt-2 mb-4 text-gray-500">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="relative block py-24 lg:pt-0 bg-gray-900">
            <div class="container mx-auto px-4">
              <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                <div class="w-full lg:w-6/12 px-4">
                  <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
                  >
                    <div class="flex-auto p-5 lg:p-10">
                      <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                      <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                        Complete this form and we will get back to you in 24 hours.
                      </p>
                      <div class="relative w-full mb-3 mt-8">
                        <label
                          class="block uppercase text-gray-700 text-xs font-bold mb-2"
                          for="full-name"
                          >Full Name</label
                        ><input
                          type="text"
                          class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                          placeholder="Full Name"
                          style="transition: all 0.15s ease 0s;"
                        />
                      </div>
                      <div class="relative w-full mb-3">
                        <label
                          class="block uppercase text-gray-700 text-xs font-bold mb-2"
                          for="email"
                          >Email</label
                        ><input
                          type="email"
                          class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                          placeholder="Email"
                          style="transition: all 0.15s ease 0s;"
                        />
                      </div>
                      <div class="relative w-full mb-3">
                        <label
                          class="block uppercase text-gray-700 text-xs font-bold mb-2"
                          for="message"
                          >Message</label
                        ><textarea
                          rows="4"
                          cols="80"
                          class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                          placeholder="Type a message..."
                        ></textarea>
                      </div>
                      <div class="text-center mt-6">
                        <button
                          class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                          style="transition: all 0.15s ease 0s;"
                        >
                          Send Message
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> --}}
        </main>
        <footer class="relative bg-gray-300 pt-8 pb-6">
          <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;"
          >
            {{-- <svg
              class="absolute bottom-0 overflow-hidden"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 2560 100"
              x="0"
              y="0"
            >
              <polygon
                class="text-gray-300 fill-current"
                points="2560 0 2560 100 0 100"
              ></polygon>
            </svg> --}}
          </div>
          <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap">
              <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl font-semibold">Let's keep it clean!</h4>
                <h5 class="text-lg mt-0 mb-2 text-gray-700">
                    Cleanliness, service, our motto
                </h5>
                {{-- <div class="mt-6">
                  <button
                    class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                    type="button"
                  >
                    <i class="flex fab fa-twitter"></i></button
                  ><button
                    class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                    type="button"
                  >
                    <i class="flex fab fa-facebook-square"></i></button
                  ><button
                    class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                    type="button"
                  >
                    <i class="flex fab fa-dribbble"></i></button
                  ><button
                    class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                    type="button"
                  >
                    <i class="flex fab fa-github"></i>
                  </button>
                </div> --}}
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                  {{-- <div class="w-full lg:w-4/12 px-4 ml-auto">
                    <span
                      class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                      >Useful Links</span
                    >
                    <ul class="list-unstyled">
                      <li>
                        <a
                          class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                          href="https://www.creative-tim.com/presentation"
                          >About Us</a
                        >
                      </li>
                      <li>
                        <a
                          class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                          href="https://blog.creative-tim.com"
                          >Blog</a
                        >
                      </li>
                      <li>
                        <a
                          class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                          href="https://www.github.com/creativetimofficial"
                          >Github</a
                        >
                      </li>
                      <li>
                        <a
                          class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                          href="https://www.creative-tim.com/bootstrap-themes/free"
                          >Free Products</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <span
                      class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                      >Other Resources</span
                    >
                    <ul class="list-unstyled">
                      <li>
                        <a
                          class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                          href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                          >MIT License</a
                        >
                      </li>
                      <li>
                        <a
                          class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                          href="https://creative-tim.com/terms"
                          >Terms &amp; Conditions</a
                        >
                      </li>
                      <li>
                        <a
                          class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                          href="https://creative-tim.com/privacy"
                          >Privacy Policy</a
                        >
                      </li>
                      <li>
                        <a
                          class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                          href="https://creative-tim.com/contact-us"
                          >Contact Us</a
                        >
                      </li>
                    </ul>
                  </div> --}}
                </div>
              </div>
            </div>
            {{-- <hr class="my-6 border-gray-400" /> --}}
            {{-- <div
              class="flex flex-wrap items-center md:justify-between justify-center"
            >
              <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-600 font-semibold py-1">
                  Copyright © 2019 Tailwind Starter Kit by
                  <a
                    href="https://www.creative-tim.com"
                    class="text-gray-600 hover:text-gray-900"
                    >Creative Tim</a
                  >.
                </div>
              </div>
            </div> --}}
          </div>
        </footer>
      </body>
      <script>
        function toggleNavbar(collapseID) {
          document.getElementById(collapseID).classList.toggle("hidden");
          document.getElementById(collapseID).classList.toggle("block");
        }
      </script>
    
</html>
