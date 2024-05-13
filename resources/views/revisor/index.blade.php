<x-layout>
    <div class="min-vh-100 pt-5">
        <div class="container-fluid pt-5">
            <div class="row">
                <di class="col-12 text-center mb-5">
                    <h1>{{$advertisement_to_check ? __('ui.reviewAdvertisement') : __('ui.noReviewAdvertisement')}}</h1>
                </di>
            </div>
        </div>
        @if ($advertisement_to_check)
        <div class="container mb-5 min-vh-100">
            <div class="row">
                <div class="col-md-3 border-end">
                    <h5 class="tc-accent mt-3">Tags</h5>
                    <div class="p-2">
                        @if ($advertisement_to_check->images->first->get()->labels)
                            @foreach ($advertisement_to_check->images->first->get()->labels as $label)
                                <p class="d-inline">{{$label}}</p>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body">
                        <h5 class="tc-accent">Revisione Immagini</h5>
                        <p>Adulti: <span class="{{$advertisement_to_check->images->first->get()->adult}}"></span></p>
                        <p>Satira: <span class="{{$advertisement_to_check->images->first->get()->spoof}}"></span></p>
                        <p>Medicina: <span class="{{$advertisement_to_check->images->first->get()->medical}}"></span></p>
                        <p>Violenza: <span class="{{$advertisement_to_check->images->first->get()->violence}}"></span></p>
                        <p>Conenuto Ammiccante: <span class="{{$advertisement_to_check->images->first->get()->racy}}"></span></p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide mb-5">
                        @if($advertisement_to_check->images)
                        <div class="carousel-inner">
                            @foreach ($advertisement_to_check->images as $image)
                                <div class="carousel-item @if($loop->first)active @endif text-center">
                                    <img src="{{$image->getUrl()}}" class="img-fluid" alt="immagine">
                                </div>
                            @endforeach
                        </div>
                        @else
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/500" class="d-block w-100" alt="...">
                                  </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/501" class="d-block w-100" alt="...">
                                  </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/502" class="d-block w-100" alt="...">
                                  </div>                              
                            </div>
                        @endif
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <i class="fa-solid fa-chevron-left fs-1"></i>
                            <span class="visually-hidden">{{__('ui.prevPageButton')}}</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <i class="fa-solid fa-chevron-right fs-1"></i>
                            <span class="visually-hidden">{{__('ui.nextPageButton')}}</span>
                        </button>
                    </div>
                    <h5 class="card-title pb-3 fw-bold">{{__('ui.titleAdvertisement')}}<br> {{$advertisement_to_check->title}}</h5> 
                    <p class="card-text">{{__('ui.descriptionAdvertisement')}}<br> {{$advertisement_to_check->description}}</p> 
                    <p class="card-title">{{__('ui.dateAdvertisement')}} il {{$advertisement_to_check->created_at}}</p> 
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