<x-layout>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        
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
        <!-- Remeber me checkbox -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="checkbox" name="remember" id="remember" class="form-check-input">
            <label class="form-check-label" for="remember">Ricordami</label>
        </div>
        

        <!-- Submit button -->
        <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Accedi</button>
    </form>

</x-layout>
