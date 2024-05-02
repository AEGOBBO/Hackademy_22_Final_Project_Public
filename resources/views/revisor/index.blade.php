<x-layout>
    <div class="container-fluid">
        <div class="row">
            <di class="col-12">
                <h1>{{$advertisement_to_check ? 'Annuncio da revisionare' : 'non ci sono annunci da revisionare'}}</h1>
            </di>
        </div>
    </div>
    @if ($advertisement_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
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
                <h5 class="card-title">Titolo: {{$advertisement_to_check->title}}</h5> 
                <p class="card-text">Descrizione: {{$advertisement_to_check->description}}</p> 
                <p class="card-title">Pubblicato il: {{$advertisement_to_check->created_at}}</p> 
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.accept', ['advertisement' => $advertisement_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                    <button type="submit" class="btn btn-outline-success">Accetta</button>
                </form>
            <div class="col-12 col-md-6 text-end">
                <form action="{{route('revisor.reject', ['advertisement' => $advertisement_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                    <button type="submit" class="btn btn-outline-danger">Rifiuta</button>
                </form>
            </div>
        </div>
    </div>
    @endif
</x-layout>