<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{('/assets/app.css')}}" rel="stylesheet"> {{-- This would not be required since app.css is already existing under /public/build/assets/ --}}
    <link href="{{'/css/Navbar.css'}}" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

    {{-- Links and scripts from here down to the next marker below are added by Enerio: --}}
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link  href="{{asset('build/assets/app.css')}}" rel="stylesheet">
    <link href="{{secure_asset('build/assets/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/properties.css')}}" rel="stylesheet">
    <script src="{{secure_asset('build/assets/app.css')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- Links and scripts from here up to the next marker above are added by Enerio: --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

</head>

<body>


  <nav class="navbar sticky-top navbar-expand-lg shadow" style="background-color: #10202b;">
    <div class="container-fluid text-white">
      <a class="navbar-brand" href="/">
        <img src="/assets/1.png" alt="Company Logo" width="120px">
      </a>
      <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse pl-2" id="navbarNavDropdown" style="justify-content:end">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          @guest
          @if(Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="/propertiesShow">Properties</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/admin/properties">Properties</a>
          </li>
          @endif
          @endguest
          
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pricing">Pricing</a>
          </li>

            <!-- Authentication Links -->
            @guest                        
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
           @endguest



          {{-- <li class="nav-item">
            <a class="nav-link" href="/signup">SignUp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/signin">SignIn</a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>
  <script src="{{secure_asset('build/assets/app.css')}}"></script>
<div>
 <main>

 </main>
 <div>
  @yield('content')
 </div>
 
 {{-- <div class="container-fluid justify-content-center align-items-center pt-2" style="margin-left:auto; margin-right:auto "> --}}
  <div className="container bg-warning" style=" xwidth: 100vw;">
  <footer class="py-6 xrow xjustify-content-md-center">
    <div class="row p-2 mx-2 d-flex xflex-row xflex-wrap xtext-align-center justify-content-center aalign-items-center xbg-primary" style="justify-content: center; align-items:center; text-align:left" >
    {{-- <div class="row d-flex justify-content-between"> --}}
      <div class=col-md-8>
        <div class="row justify-content-around">
      <div class="col-md-4 xbg-warning" style="width: x15vw;">
        <ul class="nav flex-column">
          <h4>Explore</h4>
          <li class="nav-item mb-2"><a href="/">Home</a></li>
          <li class="nav-item mb-2"><a href="/properties">Properties</a></li>
          <li class="nav-item mb-2"><a href="/pricing">Pricing</a></li>
          <li class="nav-item mb-2"><a href="/register">Sign Up</a></li>
        </ul>
      </div>

      <div class="col-md-4 xbg-light" style="width: x15vw;">
        <ul class="nav flex-column">
          <h5>Latest Properties</h5>
          <li class="nav-item mb-2"><a href="">Metro Manila</a></li>
          <li class="nav-item mb-2"><a href="">Luzon</a></li>
          <li class="nav-item mb-2"><a href="">Visayas</a></li>
          <li class="nav-item mb-2"><a href="">Mindanao</a></li>
        </ul>
      </div>

      <div class="col-md-4 xbg-secondary"style="width: x15vw;">
        <ul class="nav flex-column">
          <h5>Follow Us</h5>
          <li class="nav-item mb-2"><a href=""><i class="ri-youtube-fill"></i>Youtube</a></li>
          <li class="nav-item mb-2"><a href=""><i class="ri-instagram-fill"></i>Instagram</a></li>
          <li class="nav-item mb-2"><a href=""><i class="ri-facebook-circle-fill"></i>Facebook</a></li>
          <li class="nav-item mb-2"><a href=""><i class="ri-twitter-fill"></i>Twitter</a></li>
        </ul>
      </div>
        </div>
    </div>
      <div class="col-md-4 xbg-info flex-column" style="max-width: 300px;size:auto">
        <div class="row xd-flex xflex-row xbg-info">
          <div class="card col-md-12 xcard w-100 shadow lg p-1 mb-2" style="xwidth: 25vw; padding: 5px;background-color: #FAD9C1">
          <h5>Subscribe to our newsletter</h5>
            <p>We'll provide recent updates on property listings, promotions, sales and more.</p>
          <form>
            {{-- <h5>Subscribe to our newsletter</h5>
            <p>We'll provide recent updates on property listings, promotions, sales and more.</p> --}}
            <input type="text" class="form-control w-100 shadow" name="email" placeholder="Email">
            <br>
            {{-- <button  class="btn btn-dark btn-lg w-100" type="submit">Subscribe</button> --}}
            <button type="button" class="btn-lg w-100" style="font-family:'Poppins', sans-serif; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Subscribe</button>
          </form>
          </div>
          </div>
        </div>
      </div>
    </div>

      {{-- <br> --}}
      <div style="border-top: 1px solid #10202b; background-color:#FAD9C1">
      {{-- <hr style="border-top: 2px solid #10202b; background-color:#FAD9C1"> --}}
        <p class="py-0 my-0 text-center" style="background-color:#FAD9C1">© 2022 Lem Properties.ph, All rights reserved.</p>
      </div>

      {{-- <div class="py-5 xmy-5 bg-success" >
              <hr style="border-top: 1px solid #10202b">
        <p>© 2022 Lem Properties.ph, All rights reserved.</p>
      </div> --}}
  </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
