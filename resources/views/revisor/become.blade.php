<x-layout>
    <div class="container min-vh-100 pt-5">
        <div class="row pt-5">
            <h1 class="text-center pt-5">{{ __('ui.workWithUsTitle') }}</h1>
            <h2 class="text-center">{{ __('ui.workWithUsSubTitle') }}</h2>
            <form action="{{route('revisor.request')}}" method="POST" class="col-12">
                @csrf
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <!-- NOME -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="name">{{ __('ui.workWithUsName') }}</label>
                    <input type="text" id="name" class="form-control" name="name" />
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
        
                <!-- EMAIL -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="email">{{ __('ui.workWithUsEmail') }}</label>
                    <input type="email" id="email" disabled class="form-control" name="email" value="{{Auth::user()->email}}"/>
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <!-- RICHIESTA -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="request">{{ __('ui.workWithUsDesc') }}</label>
                    <textarea class="form-control" id="request" rows="4" name="request"></textarea>
                    @error('request')
                        {{ $message }}
                    @enderror
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-custom btn-block mb-4">{{ __('ui.workWithUsSend') }}</button>
            </form>
        </div>
    </div>
</x-layout>