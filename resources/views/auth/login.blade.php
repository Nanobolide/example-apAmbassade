@extends('layouts.authApp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark">Ambassade RCA</h2>
                <div class="text-center mb-1 text-dark">Connexion</div>
                <div class="card my-1">

                    <form method="POST" action="{{ route('login') }}" class="card-body shadow-lg cardbody-color p-lg-3">
                        @csrf

                        <div class="text-center">
                            <img src="{{ asset('rca/symbole.png')}}"
                                class="img-fluid profile-image-pic img-thumbnail mb-3" width="200px"
                                alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email"
                                aria-describedby="email" placeholder="Addresse Email" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>





                        <div class="mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" id="password"
                                placeholder="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-5 mb-4 w-100">Connexion</button>
                        </div>

                        <div id="emailHelp" class="form-text text-center mb-1 text-dark">Pas de compter? <a
                                class="text-dark fw-bold" href="{{ route('register') }}">Créer un compte</a>
                        </div>

                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Vous avez oublié votre mot de passe?
                            @if (Route::has('password.request'))
                            <a class="text-dark fw-bold"  href="{{ route('password.request') }}">Réinitialisez votre compte ici</a>
                            @endif
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
