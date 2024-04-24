<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
            <form wire:submit="store">
                
                @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <!-- TITOLO -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="title" class="form-control" wire:model="title" />
                    <label class="form-label" for="title">Titolo</label>
                </div>

                <!-- DESCRIZIONE -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <textarea class="form-control" id="description" rows="4" wire:model="description"></textarea>
                    <label class="form-label" for="description">Descrizione</label>
                </div>
                <!-- PREZZO -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="number" id="price" class="form-control" wire:model="price" />
                    <label class="form-label" for="price">Prezzo</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Inserisci</button>
            </form>
        </div>
    </div>
</div>
