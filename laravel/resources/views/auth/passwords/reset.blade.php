@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('/img/bg_1.png');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Wachtwoord veranderen
            </span>
            <form class="login100-form p-b-33 p-t-5" method="POST"  action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                @if($errors->any())
                <div class="text-center p-t-20 m-l-20 m-r-20">
                    <h4 style="color:red;">{{$errors->first()}}</h4>
                </div>
                @endif

                <div class="wrap-input100" data-validate = "Vul uw e-mail in">
                    <input class="input100" type="email" value="{{ old('email') }}" id="email" required="" oninvalid="this.setCustomValidity('E-mail is vereist')"
                    oninput="setCustomValidity('')" name="email" placeholder="E-mail">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>

                <div class="wrap-input100" data-validate="Vul uw nieuwe wachtwoord in">
                    <input class="input100" type="password" id="password" name="password" required="" oninvalid="this.setCustomValidity('Wachtwoord is vereist')" oninput="setCustomValidity('')" placeholder="Nieuw Wachtwoord">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="wrap-input100" data-validate="Vul uw nieuwe wachtwoord opnieuw in">
                    <input class="input100" type="password" id="password-confirm" name="password_confirmation" required="" oninvalid="this.setCustomValidity('Wachtwoord is vereist')" oninput="setCustomValidity('')" placeholder="Nieuw Wachtwoord">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn" type="submit">
                        Reset Wachtwoord
                    </button>
                </div>

                <div class="text-center p-t-20">
                    <span class="txt1">
                        Toch niet vergeten?
                    </span>
                    <a class="txt2" href="{{ route('login') }}">
                        Inloggen!
                    </a>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection
