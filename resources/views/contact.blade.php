

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <title>{{ config('app.name', 'Laravel') }}</title>
        


    
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
   <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="{{route('welcome')}}" class="-m-1.5 p-1.5">
              <span class="sr-only">Our Company</span>
              <img class="h-20 w-26" src="/img/logo.png" alt="">
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" id="open" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          <div class="hidden lg:flex lg:gap-x-12">
            
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Démo</a>
            <a href="{{ route('dev')}}" class="text-sm font-semibold leading-6 text-gray-900">Dévelopeurs</a>
            <div class="relative">
              <button type="button" class="dropdown-btn flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
                Entreprise
                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
                
              </button>
      
              <!--
                'Product' flyout menu, show/hide based on flyout menu state.
      
                Entering: "transition ease-out duration-200"
                  From: "opacity-0 translate-y-1"
                  To: "opacity-100 translate-y-0"
                Leaving: "transition ease-in duration-150"
                  From: "opacity-100 translate-y-0"
                  To: "opacity-0 translate-y-1"
              -->
              <div class=" box-drop absolute -left-8 top-full z-10 hidden mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5" >
                <div class="p-4">
                  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                      </svg>
                    </div>
                    <div class="flex-auto">
                      <a href="#" class="block font-semibold text-gray-900">
                        Analytics
                        <span class="absolute inset-0"></span>
                      </a>
                      <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                    </div>
                  </div>
                  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                      </svg>
                    </div>
                    <div class="flex-auto">
                      <a href="#" class="block font-semibold text-gray-900">
                        Engagement
                        <span class="absolute inset-0"></span>
                      </a>
                      <p class="mt-1 text-gray-600">Speak directly to your customers</p>
                    </div>
                  </div>
                  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                      </svg>
                    </div>
                    <div class="flex-auto">
                      <a href="#" class="block font-semibold text-gray-900">
                        Security
                        <span class="absolute inset-0"></span>
                      </a>
                      <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
                    </div>
                  </div>
                  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                      </svg>
                    </div>
                    <div class="flex-auto">
                      <a href="#" class="block font-semibold text-gray-900">
                        Integrations
                        <span class="absolute inset-0"></span>
                      </a>
                      <p class="mt-1 text-gray-600">Connect with third-party tools</p>
                    </div>
                  </div>
                  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                      </svg>
                    </div>
                    <div class="flex-auto">
                      <a href="#" class="block font-semibold text-gray-900">
                        Automations
                        <span class="absolute inset-0"></span>
                      </a>
                      <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
                    </div>
                  </div>
                </div>
                <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                  <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z" clip-rule="evenodd" />
                    </svg>
                    Watch demo
                  </a>
                  <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                    </svg>
                    Contact sales
                  </a>
                </div>
              </div>
            </div>
            <a href="{{route('contact')}}" class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Se connecter <span aria-hidden="true">&rarr;</span></a>
          </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden hidden" role="dialog" id="mobile" aria-modal="true">
          <!-- Background backdrop, show/hide based on slide-over state. -->
          <div class="fixed inset-0 z-10"></div>
          <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <a href="{{ route('welcome')}}" class="-m-1.5 p-1.5">
                <span class="sr-only">Our Company</span>
                <img class="h-20 w-26" src="/img/logo.png" alt="">
              </a>
              <button type="button" id="close" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                  <div class="-mx-3">
                    <button type="button" class="drop-mobile flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                      Product
                      <!--
                        Expand/collapse icon, toggle classes based on menu open state.
      
                        Open: "rotate-180", Closed: ""
                      -->
                      <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                      </svg>
                    </button>
                    <!-- 'Product' sub-menu, show/hide based on menu state. -->
                    <div class="box-mobile mt-2 space-y-2 ">
                      <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Analytics</a>
                      <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">À propos de nous</a>
                      <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Security</a>
                      <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Integrations</a>
                      <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Automations</a>
                      <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Watch demo</a>
                      <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact sales</a>
                    </div>
                  </div>
                </div>
                <div class="py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Se connecter</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header> 
   
      <img src="/svg/blob2.svg" style="z-index: -100000;" class="top-56 mr-8 w-40 h-48 absolute" alt="" srcset="">
          <img src="/svg/blob1.svg" style="z-index: -100000;" class=" left-96 top-24 w-96 h-48 absolute" alt="" srcset="">
          
          <div class="isolate bg-white px-6 py-1 sm:py-1 lg:px-8">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
              <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contactez -nous</h2>
              <p class="mt-2 text-lg leading-8 text-gray-600">Laisser nous un message et on revient vite vers vous</p>
            </div>
            <form action="#" method="POST" class="mx-auto mt-6 max-w-xl sm:mt-6">
              <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                  <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Nom</label>
                  <div class="mt-2.5">
                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                
                <div class="sm:col-span-2">
                  <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                  <div class="mt-2.5">
                    <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-2">
                  <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                  <div class="mt-2.5">
                    <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                  </div>
                </div>
              </div>
              <div class="mt-10">
                <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Parlons-nous</button>
              </div>
            </form>
        </div>
      

    

{{-- Footer --}}
<section id="footer" >
  <div class="bg-black relative text-white">
      <div class="container py-10">
          <div class="flex justify-around pb-10">
              <div class="space-y-6 ">
                  <h4 class="font-bold text-lg">À propos de l'application</h4>
                  <p class="leading-relaxed">Onirix est une application web d'interprétation des rêves permettant aux utilisateurs de mieux comprendre le sens et la signification de leurs rêves.</p>
                  
              </div>
              <div class="flex justify-around  w-96 md:justify-around">
                  <div class="space-y-6">
                      <h4 class="font-bold text-lg">Quick Links</h4>
                      <ul class="space-y-3">
                          <li class="underline hover:no-underline hover:text-color-secondary"><a href="">Accueil</a></li>
                          <li class="underline hover:no-underline hover:text-color-secondary"><a href="#features">Démo</a></li>
                          <li class="underline hover:no-underline hover:text-color-secondary"><a href="#blog">Blog</a></li>
                          <li class="underline hover:no-underline hover:text-color-secondary"><a href="#contact">Contact</a></li>

                      </ul>
                  </div>

                  <div class="space-y-6">
                      <h4 class="font-bold text-lg">Aide</h4>
                      <ul class="space-y-3">
                          <li class="underline hover:no-underline hover:text-color-secondary"><a href="#">À propos de nous</a></li>
                          <li class="underline hover:no-underline hover:text-color-secondary"><a href="#blog">Termes et conditions</a></li>
                          <li class="underline hover:no-underline hover:text-color-secondary"><a href="#contact">Développeurs</a></li>

                      </ul>
                  </div>
              </div>
              
          </div>


          <div class="flex justify-center pt-10 border-t border-color-gray">
              <p>2023 &copy; comdev. All Rights Reserved.</p>
          </div>
      </div>
  </div>
</section>


      

      <script>
        // Mobile menu
        const hamburger = document.querySelector('#close');
        const open = document.querySelector('#open');

        const menu = document.querySelector('#mobile');
        const hLink = document.querySelectorAll('#hLink');
        const faSolid = document.querySelector(".fa-solid");

        hamburger.addEventListener("click", () => {
            menu.classList.toggle('hidden');
            
        })

        open.addEventListener("click", ()=>{
          menu.classList.toggle("hidden")
        })
        hLink.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                faSolid.classList.toggle('fa-xmark');
            })
        })

        // Drop Down 
        const btn_drop = document.querySelector('.dropdown-btn');
        const drop_box = document.querySelector('.box-drop');

        // Drop Mobile
         const drop_mobile = document.querySelector('.drop-mobile');
          const box_mobile = document.querySelector('.box-mobile');
         drop_mobile.addEventListener('click', ()=>{
          console.log("cliqué")
          box_mobile.classList.toggle('hidden')
         })
        btn_drop.addEventListener('click', () => {
          drop_box.classList.toggle('hidden')
          console.log("cliqué")
        })
      </script>   
   
    </body>
</html>


  
          