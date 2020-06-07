@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('/img/bg_1.png');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Binnentuin Adminpanel
            </span>
            <form class="login100-form validate-form p-b-33 p-t-5">

                <div class="wrap-input100 validate-input" data-validate = "Vul uw gebruikersnaam in">
                    <input class="input100" type="text" name="username" placeholder="Gebruikersnaam">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Vul uw wachtwoord in">
                    <input class="input100" type="password" name="pass" placeholder="Wachtwoord">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn">
                        Inloggen
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>

@endsection