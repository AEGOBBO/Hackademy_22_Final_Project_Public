<x-layout>
    <div class="container min-vh-100 pt-5">
        <div class="row">
            <div class="col-12 pt-5">
                <h1 class="text-center">Registrati al portale</h1>
                <h2 class="text-center mb-5 pb-5">Inserisci i tuoi dati nel form sottostante</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="name" id="name" class="form-control" />
                                <label class="form-label" for="name">Nome utente</label>
                            </div>
                        </div>
            
                    </div>
            
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="email" class="form-control" />
                        <label class="form-label" for="email">Indirizzo email</label>
                    </div>
            
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="password" class="form-control" />
                        <label class="form-label" for="password">Password</label>
                    </div>
            
                    <!-- Password confirmation -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control" />
                        <label class="form-label" for="password_confirmation">Conferma password</label>
                    </div>
            
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-custom mb-4">Registrati</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
