<x-layout>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Vuoi lavorare con noi?</h1>
            <h2 class="text-center">Compila il seguente form</h2>
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
                    <label class="form-label" for="name">Nome</label>
                    <input type="text" id="name" class="form-control" name="name" />
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
        
                <!-- EMAIL -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" disabled class="form-control" name="email" value="{{Auth::user()->email}}"/>
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <!-- RICHIESTA -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="request">Scrivi qui</label>
                    <textarea class="form-control" id="request" rows="4" name="request"></textarea>
                    @error('request')
                        {{ $message }}
                    @enderror
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-custom btn-block mb-4">Invia</button>
            </form>
        </div>
    </div>
</x-layout>