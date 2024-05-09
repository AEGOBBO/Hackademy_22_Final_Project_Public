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
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/400" class="d-block w-100 img-fluid" alt="{{$advertisement->title}}">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/401" class="d-block w-100 img-fluid" alt="{{$advertisement->title}}">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/402" class="d-block w-100 img-fluid" alt="{{$advertisement->title}}">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                {{-- dettaglio --}}
                <div class="container">
                    <div class="row justify-center">
                        <div class="col-12">
                            <div class="card-body">
                                <h5 class="card-title">{{$advertisement->title}}</h5>
                                <p class="card-text">{{$advertisement->price}}</p>
                                <p class="card-text">{{$advertisement->description}}</p>
                                <a href="{{route('categoryShow', $advertisement->category)}}" class="btn btn-success">Categoria: {{$advertisement->category->name}}</a>
                                <p class="card-footer">Pubblicato {{$advertisement->created_at->diffForHumans()}} <br>
                                    <span>da: {{$advertisement->user->name ?? ''}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>