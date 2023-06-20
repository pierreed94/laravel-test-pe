<form class="form__contact" action="{{ route('new_formContact') }}" method="POST">
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
        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstName" name="firstname" placeholder="Votre prénom">
        <label for="firstname">Votre prénom</label>
        @error('firstname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Votre email">
        <label for="email">Votre email</label>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control @error('topic') is-invalid @enderror" id="topic" name="topic" placeholder="Objet de la demande">
        <label for="topic">Objet de la demande</label>
        @error('topic')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


    <div class="form-floating mb-3">
        <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Votre message (50 caractères minimum" name="message" id="message" style="height: 100px"></textarea>
        <label for="message">Votre message (50 caractères minimum)</label>
        @error('message')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="text-center">
        <button type="submit" class="button__secondary ml-auto">Envoyer</button>
    </div>

    @if(session()->has('message'))
        <div id="alert__success">
            <div class="alert alert-success mt-5">
                {{ session()->get('message') }}
            </div>
        </div>


        <script>
            setTimeout(() => {
                let alertSuccess = document.querySelector('#alert__success')
                console.log(alertSuccess)
                alertSuccess.remove()
            }, 3000)
        </script>
    @endif
</form>

