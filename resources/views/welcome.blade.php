<x-layout>
    <header class="min-vh-100">
        <div class="container ">
            <div class="row p-5">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a role="button" class="btn btn-custom" href="{{route('advertisement.create')}}">Insersci annuncio</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($advertisements as $advertisement)
                <div class="col-12 col-md-4">
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
                @endforeach
            </div>
        </div>
    </header>
</x-layout>
