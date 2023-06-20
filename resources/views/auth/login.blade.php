@extends('layouts.front')

@section('content')

<section>
    <div class="row">
        <div class="col-12">
            <h1 class="mb-5 text-center">
                Se connecter
            </h1>

        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-sm-5 col-xs-12">
            <div class="card p-5 ">
                <form method="POST" class="gap-3">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Votre email">
                        <label for="email">Votre email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('email') }}" placeholder="Votre email">
                        <label for="password">Votre password</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>

            </div>
        </div>
    </div>
</section>


@stop
