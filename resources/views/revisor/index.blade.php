<x-layout>
    <div class="min-vh-100">
        <div class="container-fluid">
            <div class="row">
                <di class="col-12 text-center mb-5">
                    <h1>{{$advertisement_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
                </di>
            </div>
        </div>
        @if ($advertisement_to_check)
        <div class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 d-flex justify-content-center p-4">
                        <img src="https://picsum.photos/200" class="img-fluid" alt="Immagine random">       
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
                        <button type="submit" class="btn btn-outline-success mb-2">Accetta</button>
                    </form>
                <div class="col-12 col-md-6">
                    <form action="{{route('revisor.reject', ['advertisement' => $advertisement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <button type="submit" class="btn btn-outline-danger">Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</x-layout>