@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('/img/bg_1.png');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Binnentuin Adminpanel
            </span>
            <form class="login100-form p-b-33 p-t-5" method="POST"  action="{{ route('login') }}">
                @csrf

                @if($errors->any())
                <div class="text-center p-t-20">
                    <h4 style="color:red;">{{$errors->first()}}</h4>
                </div>
                @endif

                <div class="wrap-input100 @error('email') is-invalid @enderror" data-validate = "Vul uw gebruikersnaam in">
                    <input class="input100" type="text" value="{{ old('username') }}" required name="username" placeholder="Gebruikersnaam">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>

                <div class="wrap-input100 @error('password') is-invalid @enderror" data-validate="Vul uw wachtwoord in">
                    <input class="input100" type="password" name="password" placeholder="Wachtwoord">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn" type="submit">
                        Inloggen
                    </button>
                </div>

                @if (Route::has('password.request'))
                <div class="text-center p-t-20">
                    <span class="txt1">
                        Wachtwoord vergeten?
                    </span>
                    <a class="txt2" href="{{ route('password.request') }}">
                        Aanvragen!
                    </a>
                </div>
                @endif
                
            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>

@endsection