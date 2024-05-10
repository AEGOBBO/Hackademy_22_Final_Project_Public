<x-layout>
    <header class="container pt-5">
        <div class="row">
            <div class="col-12 p-5">
                <h1 class="text-center">Dettagli per l'annuncio {{$advertisement->title}}</h1>
            </div>
        </div>
    </header>
    <main class="container min-vh-100">
        <div class="row">
            <div class="col-12 col-md-6">
                {{-- carosello --}}
                <div id="carouselExample" class="carousel slide">
                    @if (!$advertisement->images()->get()->isEmpty())
                    <div class="carousel-inner">
                        @foreach ($advertisement->images as $image)
                            <div class="carousel-item @if($loop->first)active @endif text-center">
                                <img src="{{Storage::url($image->path)}}" class="img-fluid" alt="immagine">
                            </div>
                        @endforeach
                    </div>
                    @else
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/401" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/402" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    @endif
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <i class="fa-solid fa-chevron-left fs-1"></i>
                        <span class="visually-hidden">{{__('ui.prevPageButton')}}</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <i class="fa-solid fa-chevron-right fs-1"></i>
                        <span class="visually-hidden">{{__('ui.nextPageButton')}}</span>
                    </button>
                </div>                
            </div>
            <div class="col-12 col-md-6 pt-5">
                {{-- dettaglio --}}
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-column justify-content-center">
                                <h5 class="card-title">{{$advertisement->title}}</h5>
                                <p class="card-text">{{$advertisement->price}}</p>
                                <p class="card-text">{{$advertisement->description}}</p>
                                <div>
                                    <a href="{{route('categoryShow', $advertisement->category)}}" class="btn btn-custom">Categoria: {{$advertisement->category->name}}</a>
                                </div>
                                <p class="mt-5">Pubblicato {{$advertisement->created_at->diffForHumans()}} <br>
                                    <span>Da {{$advertisement->user->name ?? ''}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
