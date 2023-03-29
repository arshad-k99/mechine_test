<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1674944402" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css">
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
<body>
    <script src="./dist/js/demo-theme.min.js?1674944402"></script>
    <div class="page">
      <!-- Navbar -->
      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl"> 
        </div>
      </header>
      <header class="navbar-expand-md ">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar navbar-light">
            <div class="container-xl">
              <ul class="navbar-nav mx-auto">
               
                <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                  <a class="nav-link"  href="{{ route('dashboard') }}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                       <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                       <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                       <path d="M10 12h4v4h-4z"></path>
                    </svg>
                    </span>
                    <span class="nav-link-title">
                      Home
                    </span>
                  </a>
                </li>
                <li class="nav-item {{ request()->routeIs('deposit') ? 'active' : '' }}" >
                    <a class="nav-link" href="{{ route('deposit') }}"  >
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"></path>
                         <path d="M9 15l3 -3l3 3"></path>
                         <path d="M12 12l0 9"></path>
                      </svg>
                      </span>
                      <span class="nav-link-title">
                        Deposit
                      </span>
                    </a>
                  </li>
                  <li class="nav-item {{ request()->routeIs('withdraw') ? 'active' : '' }}">
                    <a class="nav-link"  href="{{ route('withdraw') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4"></path>
                         <path d="M12 13l0 9"></path>
                         <path d="M9 19l3 3l3 -3"></path>
                      </svg>
                      </span>
                      <span class="nav-link-title">
                        Withdraw
                      </span>
                    </a>
                  </li>
                  <li class="nav-item {{ request()->routeIs('transfer') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('transfer') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-git-compare" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M6 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                         <path d="M18 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                         <path d="M11 6h5a2 2 0 0 1 2 2v8"></path>
                         <path d="M14 9l-3 -3l3 -3"></path>
                         <path d="M13 18h-5a2 2 0 0 1 -2 -2v-8"></path>
                         <path d="M10 15l3 3l-3 3"></path>
                      </svg>
                      </span>
                      <span class="nav-link-title">
                        Transfer
                      </span>
                    </a>
                  </li>
                  <li class="nav-item {{ request()->routeIs('statement') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('statement') }}" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-text" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                         <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                         <path d="M9 9l1 0"></path>
                         <path d="M9 13l6 0"></path>
                         <path d="M9 17l6 0"></path>
                      </svg>                      </span>
                      <span class="nav-link-title">
                        Statement
                      </span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a type="submit" class="nav-link" href="{{ route('logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                         <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                      </svg>
                      </span>
                      <span class="nav-link-title">
                        Logout
                      </span>
                    </a>
                  </li>
                  
                
              </ul>
             
            </div>
          </div>
        </div>
      </header>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>