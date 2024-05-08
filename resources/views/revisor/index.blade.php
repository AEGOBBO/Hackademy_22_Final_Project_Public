<x-layout>
    <div class="min-vh-100">
        <div class="container-fluid">
            <div class="row">
                <di class="col-12 text-center mb-5">
                    <h1>{{$advertisement_to_check}} ? {{__('ui.reviewAdvertisement')}} : {{__('ui.noReviewAdvertisement')}}</h1>
                </di>
            </div>
        </div>
        @if ($advertisement_to_check)
        <div class="container mb-5 min-vh-100">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        @if($advertisement_to_check->images)
                        <div class="carousel-inner">
                            @foreach ($advertisement_to_check->images as $image)
                                <div class="carousel-item @if($loop->first)active @endif">
                                    <img src="{{Storage::url($image->path)}}" class="img-fluid rounded p-3" alt="immagine">
                                </div>
                                
                            @endforeach
                        </div>
                        @else
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/id/27/1200/400" class="d-block w-100" alt="...">
                                  </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/id/28/1200/400" class="d-block w-100" alt="...">
                                  </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/id/29/1200/400" class="d-block w-100" alt="...">
                                  </div>                              
                            </div>
                            
                        @endif
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">{{__('ui.prevPageButton')}}</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">{{__('ui.nextPageButton')}}</span>
                        </button>
                      </div>

                    <h5 class="card-title">{{__('ui.titleAdvertisement')}} {{$advertisement_to_check->title}}</h5> 
                    <p class="card-text">{{__('ui.descriptionAdvertisement')}} {{$advertisement_to_check->description}}</p> 
                    <p class="card-title">{{__('ui.dateAdvertisement')}} {{$advertisement_to_check->created_at}}</p> 
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="{{route('revisor.accept', ['advertisement' => $advertisement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <button type="submit" class="btn btn-outline-success mb-2">{{__('ui.acceptAdvertisement')}}</button>
                    </form>
                <div class="col-12 col-md-6">
                    <form action="{{route('revisor.reject', ['advertisement' => $advertisement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <button type="submit" class="btn btn-outline-danger">{{__('ui.rejectAdvertisement')}}</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</x-layout>