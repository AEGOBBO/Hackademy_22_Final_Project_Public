<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Pubblica qui</h2>
        </div>
        <div class="col-12 p-5 d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                <form wire:submit="store">
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- TITOLO -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="title">Titolo</label>
                        <input type="text" id="title" class="form-control" wire:model.blur="title" />
                        @error('title')
                        {{$message}}
                        @enderror
                    </div>
    
                    <!-- IMMAGINE -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="title">Immagine</label>
                        <input type="text" id="title" class="form-control" wire:model.blur="title" />
                        @error('title')
                        {{$message}}
                        @enderror
                    </div>

                    <!-- DESCRIZIONE -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="description">Descrizione</label>
                        <textarea class="form-control" id="description" rows="4" wire:model.blur="description"></textarea>
                        @error('description')
                        {{$message}}
                        @enderror
                    </div>
                    <!-- PREZZO -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="price">Prezzo</label>
                        <input type="number" id="price" class="form-control" wire:model.blur="price" />
                        @error('price')
                        {{$message}}
                        @enderror
                    </div>
                    <!-- CATEGORIA -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <select wire:model.defer="category" id="category" class="form-control">
                            <option value="">Scegli categoria</option>
                            @foreach ($categories as $category)
    
                            <option value="{{$category->id}}">
                                {{$category->name}}
                            </option>
    
                            @endforeach
                        </select>
                    </div>
    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-custom btn-block mb-4">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
</div>