<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign up - </title>
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
  <body  class=" d-flex flex-column">
    <script src="./dist/js/demo-theme.min.js?1674944402"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
        </div>
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Create new account</h2>
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="" autocomplete="off">
                @if($errors->has('name'))
                    <div class="text-danger" class="error">{{ $errors->first('name') }}</div>
                @endif
              </div>
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control"  autocomplete="off">
                @if($errors->has('email'))
                    <div class="text-danger" class="error">{{ $errors->first('email') }}</div>
                @endif
              </div>
              <div class="mb-2">
                <label class="form-label">
                  Password
                  
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" name="password" class="form-control"    autocomplete="off">
                 
                </div>
                @if($errors->has('password'))
                    <div class="text-danger" class="error">{{ $errors->first('password') }}</div>
                @endif
              </div>
              <div class="mb-2">
                <label class="form-check">
                  <input type="checkbox" class="form-check-input"/>
                  <span class="form-check-label">Remember me on this device</span>
                </label>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Sign up</button>
              </div>
            </form>
          </div>
          
         
        </div>
        <div class="text-center text-muted mt-3">
          Don't have account yet? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1674944402" defer></script>
    <script src="./dist/js/demo.min.js?1674944402" defer></script>
  </body>
</html>