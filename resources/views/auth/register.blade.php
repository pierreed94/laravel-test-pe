@extends('layouts.front')

@section('content')

    <section>
        <div class="row">
            <div class="col-12">
                <h1 class="mb-5 text-center">
                    Créer un compte
                </h1>

            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-sm-5 col-xs-12">
                <div class="card p-5 ">
                    <form method="POST" class="gap-3">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Votre nom">
                                <label for="name">Votre nom</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Votre email">
                                <label for="email">Votre email</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password"  placeholder="Votre password">
                                <label for="password">Votre password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Votre password">
                                <label for="password_confirmation">Votre password</label>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Créer un compte</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
