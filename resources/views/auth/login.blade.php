<!DOCTYPE html>
<html dir="ltr" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Doctor - Login</title>
      <!-- Custom styles for this template-->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>


   <body class="bg-gradient-primary">
   <button class="bg-light" style="border:noborder">
         <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Config::get('languages')[App::getLocale()] }}
         
          </a>
       
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
         @foreach (Config::get('languages') as $lang => $language)
         @if ($lang != App::getLocale())
        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
        @endif
        @endforeach
         </div>
      </button>

      <div class="container">
         <!-- Outer Row -->
         <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
               <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                     <!-- Nested Row within Card Body -->
                     <div class="row">
                        {{-- <div class="col-lg-6 d-inline d-lg-block bg-login-image"></div> --}}
                        <img src="img/doclogg.png" width="400">
                        <div class="col-lg-6">
                           <div class="p-5">
                              <div class="text-center">
                                 <h1 class="h4 text-gray-900 mb-4">{{ __('sentence.Welcome') }}</h1>
                              </div>
                              <form method="POST" action="{{ route('login') }}" class="user">
                                 <div class="form-group">
                                    <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  aria-describedby="emailHelp" placeholder="{{ __('sentence.Email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                                 <div class="form-group">
                                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('sentence.Password') }}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                                 <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                       <input class="custom-control-input" type="checkbox" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                                       {{ csrf_field() }}
                                       <label class="custom-control-label" for="customCheck">{{ __('sentence.Remember Me') }}</label>
                                    </div>
                                 </div>
                                 <button class="btn btn-primary btn-user btn-block" type="submit"> {{ __('sentence.Login') }}</button> 
                              </form>
               
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="{{ asset('js/app.js') }}" defer></script>
   </body>
</html>