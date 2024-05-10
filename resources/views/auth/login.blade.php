<x-layout>
    <div class="container min-vh-100 pt-5">
        <div class="row">
            <div class="col-12 pt-5">
                <h1 class="text-center mb-5 pb-5">{{__('ui.loginTitle')}}</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" name="email" id="email" class="form-control" />
                        <label class="form-label" for="email">{{__('ui.loginEmail')}}</label>
                    </div>
            
                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <input type="password" name="password" id="password" class="form-control"/>
                            {{-- <span class="px-3 showPsw">
                                <i class="fa-regular fa-eye eye" id="eye"></i>
                                <i class="fa-solid fa-eye-slash hide eyeSlash" id="eyeSlash"></i>
                            </span> --}}
                        </div>
                        <label class="form-label" for="password">{{__('ui.loginPassword')}}</label>
                    </div>
                    <!-- Remeber me checkbox -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                        <label class="form-check-label" for="remember">{{__('ui.loginRemember')}}</label>
                    </div>
                
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-custom mb-4">{{__('ui.login')}}</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
