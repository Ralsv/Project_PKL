<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

        
            <style>
               /* Container holding the image and the text */
                .container {
                position: relative;
                text-align: center;
                color: white;
                }

                /* Bottom left text */
                .bottom-left {
                position: absolute;
                bottom: 8px;
                left: 16px;
                }

                /* Top left text */
                .top-left {
                position: absolute;
                top: 8px;
                left: 16px;
                }

                /* Top right text */
                .top-right {
                position: absolute;
                top: 8px;
                right: 16px;
                }

                /* Bottom right text */
                .bottom-right {
                position: absolute;
                bottom: 8px;
                right: 16px;
                }

                /* Centered text */
                .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                }

                .img {
                filter: brightness(20%);
                }

                .button2 {
                    display: inline-block;
                    transition: all 0.2s ease-in;
                    position: relative;
                    overflow: hidden;
                    z-index: 1;
                    color: #090909;
                    padding: 8px 25px;
                    cursor: pointer;
                    font-size: 18px;
                    border-radius: 0.5em;
                    background: #e8e8e8;
                    border: 1px solid #e8e8e8;
                    box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
                }

                .button2:active {
                    color: #666;
                    box-shadow: inset 4px 4px 12px #c5c5c5, inset -4px -4px 12px #ffffff;
                }

                .button2:before {
                    content: "";
                    position: absolute;
                    left: 50%;
                    transform: translateX(-50%) scaleY(1) scaleX(1.25);
                    top: 100%;
                    width: 140%;
                    height: 180%;
                    background-color: rgba(0, 0, 0, 0.05);
                    border-radius: 50%;
                    display: block;
                    transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
                    z-index: -1;
                }

                .button2:after {
                    content: "";
                    position: absolute;
                    left: 55%;
                    transform: translateX(-50%) scaleY(1) scaleX(1.45);
                    top: 180%;
                    width: 160%;
                    height: 190%;
                    background-color: #384B70;
                    border-radius: 50%;
                    display: block;
                    transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
                    z-index: -1;
                }

                .button2:hover {
                    color: #ffffff;
                    border: 1px solid #384B70;
                }

                .button2:hover:before {
                    top: -35%;
                    background-color: #384B70;
                    transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
                }

                .button2:hover:after {
                    top: -45%;
                    background-color: #384B70;
                    transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
                }



                h1 {
                font: 800 40px Arial;
                -webkit-text-fill-color: transparent;
                -webkit-text-stroke: 1px;
                }

                h2 {
                font: 800 40px Arial;
                -webkit-text-fill-color: transparent;
                -webkit-text-stroke: 1px;
                }

            </style>
    </head>
    
    <body class="bg-gray-100">
        <div class="container mx-auto p-6">
            
            <div class="flex items-center bg-gray-200 rounded-lg shadow-lg overflow-hidden">
                
                    
                
                <div class="w-full p-8">
                    <center>
                        <img src="{{url('/images/Telkom Logo.png')}}" alt="Image" width="200" height="200"/>
                    </center>  
                    <br>
                    <br>
                <h1 class="text-6xl font-bold text-red-600">
                    Welcome To
                </h1>
                <h2 class="text-5xl font-bold text-gray-900">
                    Barcode Generator
                </h2>
                <p class="mt-4 text-gray-700 text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus est diam, faucibus at lorem et,<br> pellentesque congue felis. Pellentesque mattis, tellus vitae fringilla cursus, <br>
                    mi elit consectetur diam, eget sollicitudin neque lectus eu justo. Duis sed convallis purus, et auctor lectus. Nam ornare blandit felis,
                </p>
                <br>
                <br>
 
                @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-evenly">
                                @auth
                                    <a href="{{ url('/admin/dashboard') }}"><button class="button2">Dashboard</button></a>
                                @else
                                    <a href="{{ route('login') }}"><button class="button2">Login</button></a> 
                                    <p></p>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"><button class="button2">Register</button></a>
                                @endif
                                @endauth
                            </nav>
                @endif
                </div>
            </div>
        </div>
    </body>
    {{-- <body class="font-sans antialiased dark:bg-white dark:text-white/50">
        <div class="container">
            <div class="img"><img src="{{url('/images/banner_telkom1.jpeg')}}" alt="Snow" style="width:100%;"></div>
            
            <br>
            <br>
            <div class="centered">
                
                    <h1 class="text-6xl font-bold text-red-600">
                        Welcome To
                    </h1>
                    <h2 class="text-5xl font-bold text-white">
                        Barcode Generator
                    </h2>
                    <p class="mt-4 text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus est diam, faucibus at lorem et, pellentesque congue felis. Pellentesque mattis, tellus vitae fringilla cursus, mi elit consectetur diam, eget sollicitudin neque lectus eu justo. Duis sed convallis purus, et auctor lectus. Nam ornare blandit felis,
                    </p>
                   <br>
                   <br>
                @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-evenly">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"><button class="button">Login</button></a> 
                                    <p></p>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"><button class="button">Register</button></a>
                                @endif
                                @endauth
                            </nav>
                @endif
            </div>
        </div>
    </body> --}}
        <br>
        <br>
        <br>
        <br>
        <hr>
        <footer class="bg-gray-400 dark:bg-gray-900">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                  <div class="mb-6 md:mb-0">
                      <a href="https://flowbite.com/" class="flex items-center">
                          <img src="{{url('/images/telkom logo2.png')}}" class="h-20 me-3" alt="FlowBite Logo" />
                          {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Telkom</span> --}}
                      </a>
                  </div>
                  <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                      <div>
                          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                          <ul class="text-gray-500 dark:text-gray-400 font-medium">
                              <li class="mb-4">
                                  <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                              </li>
                              <li>
                                  <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                              </li>
                          </ul>
                      </div>
                      <div>
                          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                          <ul class="text-gray-500 dark:text-gray-400 font-medium">
                              <li class="mb-4">
                                  <a href="https://github.com/Ralsv" class="hover:underline ">Github</a>
                              </li>
                              <li>
                                  <a href="https://www.instagram.com/llueezv/" class="hover:underline">Instagram</a>
                              </li>
                          </ul>
                      </div>
                      <div>
                          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                          <ul class="text-gray-500 dark:text-gray-400 font-medium">
                              <li class="mb-4">
                                  <a href="#" class="hover:underline">Privacy Policy</a>
                              </li>
                              <li>
                                  <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
              <div class="sm:flex sm:items-center sm:justify-between">
                  <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Ralsv™</a>. All Rights Reserved.
                  </span>
                  <div class="flex mt-4 sm:justify-center sm:mt-0">
                      <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                            </svg>
                          <span class="sr-only">Instagram page</span>
                      </a>
                      <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                            </svg>
                          <span class="sr-only">Discord community</span>
                      </a>
                      <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                        </svg>
                          <span class="sr-only">Twitter page</span>
                      </a>
                      <a href="https://github.com/Ralsv" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                          </svg>
                          <span class="sr-only">GitHub account</span>
                      </a>
                  </div>
              </div>
            </div>
          </footer>
    
</html>
