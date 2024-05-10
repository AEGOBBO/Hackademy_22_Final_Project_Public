<x-layout>
    <div class="container min-vh-100 pt-5">
        <div class="row">
            <div class="col-12 pt-5">
                <h1 class="text-center">{{__('ui.registerTitle')}}</h1>
                <h2 class="text-center mb-5 pb-5">{{__('ui.registerSubTitle')}}</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="name" id="name" class="form-control" />
                                <label class="form-label" for="name">{{__('ui.registerName')}}</label>
                            </div>
                        </div>
            
                    </div>
            
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="email" class="form-control" />
                        <label class="form-label" for="email">{{__('ui.registerEmail')}}</label>
                    </div>
            
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="password" class="form-control" />
                        <label class="form-label" for="password">{{__('ui.registerPassword')}}</label>
                    </div>
            
                    <!-- Password confirmation -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control" />
                        <label class="form-label" for="password_confirmation">{{__('ui.registerConfirmPassword')}}</label>
                    </div>
            
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-custom mb-4">{{__('ui.register')}}</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
