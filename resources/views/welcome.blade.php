<x-layout>
    <header class="min-vh-100">
        <div class="container ">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a role="button" class="btn btn-danger" href="{{route('advertisement.create')}}">Insersci annuncio</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($advertisements as $advertisement)
                <div class="col-12 col-md-4">
                    <img src="https://picsum.photos/346" alt="foto" class="card-img-top p-3 rounded">
                    <div class="card-body">
                        <h5 class="card-title">{{$advertisement->title}}</h5>
                        <p class="card-text">{{$advertisement->price}}</p>
                        <p class="card-text">{{$advertisement->description}}</p>
                        <a href="" class="btn btn-danger">Dettaglio</a>
                        <a href="" class="btn btn-success">Categoria: {{$advertisement->category->name}}</a>
                        <p class="card-footer">pubblicato il: {{$advertisement->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </header>
</x-layout>
