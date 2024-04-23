<x-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" name="name" id="name" class="form-control" />
                    <label class="form-label" for="name">Nome utente</label>
                </div>
            </div>

        </div>

        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" name="email" id="email" class="form-control" />
            <label class="form-label" for="email">Indirizzo email</label>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" name="email" id="password" class="form-control" />
            <label class="form-label" for="password">Password</label>
        </div>

        <!-- Password confirmation -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="password_confirmation" name="password_confirmation" id="password_confirmation"
                class="form-control" />
            <label class="form-label" for="password_confirmation">Conferma password</label>
        </div>

        <!-- Submit button -->
        <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Registrati</button>
    </form>

</x-layout>
