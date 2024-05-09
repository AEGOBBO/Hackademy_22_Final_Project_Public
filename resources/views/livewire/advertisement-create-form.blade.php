<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h2>{{__('ui.publishAdvertisement')}}</h2>
        </div>
        <div class="col-12 p-5 d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                <form wire:submit="store" enctype="multipart/form-data">
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- TITOLO -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="title">{{__('ui.titleAdvertisement')}}</label>
                        <input type="text" id="title" class="form-control" wire:model.blur="title" />
                        @error('title')
                        {{$message}}
                        @enderror
                    </div>
    
                    <!-- IMMAGINE -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="temporary_images">{{__('ui.imageAdvertisement')}}</label>
                        <input type="file" id="temporary_images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror" wire:model="temporary_images" placeholder="Inserisci le immagini qui"/>
                        @error('temporary_images')
                        {{$message}}
                        @enderror
                    </div>
                    @if(!empty($images))
                        <div class="row">
                            <div class="col-12">
                                <p>{{__('ui.imgPreviewAdvertisement')}}</p>
                                <div class="row border border-4 border-info shadow rounded py-4">
                                    @foreach ($images as $key=>$image)

                                        <div class="col my-3 ">
                                            <div class="img-preview mx-auto shadow rounded" style="height: 20vh; width: 15vh; background-image: url({{$image->temporaryUrl()}});">
                                                
                                            </div>
                                            <button class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.deletePreviewAdvertisement')}}</button>
                                        </div>
                                        
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- DESCRIZIONE -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="description">{{__('ui.descriptionAdvertisement')}}</label>
                        <textarea class="form-control" id="description" rows="4" wire:model.blur="description"></textarea>
                        @error('description')
                        {{$message}}
                        @enderror
                    </div>
                    <!-- PREZZO -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="price">{{__('ui.priceAdvertisement')}}</label>
                        <input type="number" id="price" class="form-control" wire:model.blur="price" />
                        @error('price')
                        {{$message}}
                        @enderror
                    </div>
                    <!-- CATEGORIA -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <select wire:model.defer="category" id="category" class="form-control">
                            <option value="">{{__('ui.chooseCategory')}}</option>
                            @foreach ($categories as $category)
    
                            <option value="{{$category->id}}">
                                {{__("ui." . $category->name)}}
                            </option>
    
                            @endforeach
                        </select>
                    </div>
    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-custom btn-block mb-4">{{__('ui.addButtonAdvertisement')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>