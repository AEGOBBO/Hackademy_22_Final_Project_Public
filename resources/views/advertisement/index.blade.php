<x-layout>
    <header class="min-vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Ecco tutti gli annunci</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($advertisements as $advertisement)
                <div class="col-12 col-md-4 mb-3">
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
