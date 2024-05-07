<x-layout>
    <header class="min-vh-100">
        <div class="container ">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center d-flex flex-column">
                    <h1 class="text-center">Benvenuto su Presto.it</h1>
                    <h2 class="text-center mb-5">Il tuo sito di fiducia dedicato al marketing</h2>
                    <div class="justify-content-center mb-5">
                        <a role="button" class="btn btn-custom" href="{{route('advertisement.create')}}">Insersci annuncio</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @forelse ($advertisements as $advertisement)
                <div class="col-12 col-md-4 mb-3 pb-5">
                    <div class="card">
                        <img src="https://picsum.photos/346" alt="foto" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{$advertisement->title}}</h5>
                            <p class="card-text">{{$advertisement->price}}</p>
                            <p class="card-text">{{$advertisement->description}}</p>
                            <a href="{{route('advertisement.show-detail', $advertisement)}}" class="btn btn-danger">Dettaglio</a>
                            <a href="{{route('categoryShow', $advertisement->category)}}" class="btn btn-success">Categoria: {{$advertisement->category->name}}</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 col-md-4 mb-3 w-100">
                    <h1 class="text-center">Non ci sono annunci da mostrare!</h1>
                </div>
                @endforelse
            </div>
        </div>
    </header>
</x-layout>
