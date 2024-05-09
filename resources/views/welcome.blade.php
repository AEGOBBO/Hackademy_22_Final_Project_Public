<x-layout>
    <header class="min-vh-100">
        <div class="container header-text">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center d-flex flex-column">
                    <h1 class="text-center p-5">{{__('ui.welcomeOn')}} Presto.it <i class="fa-solid fa-person-swimming"></i></h1>
                    <div class="justify-content-center mb-5">
                        <a role="button" class="btn btn-custom" href="{{route('advertisement.create')}}">{{__('ui.addAdvertisement')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 text-center">
            <h3>{{__('ui.latestAds')}}</h3>            {{-- I nostri annunci più recenti --}}
        </div>
        <div class="container">
            <div class="row">
                @forelse ($advertisements as $advertisement)
                <div class="col-12 col-md-4 mb-3 pb-5">
                    <div class="card">
                        <img src="{{!$advertisement->images()->get()->isEmpty() ? $advertisement->images()->first()->getUrl(400, 300) : 'https://picsum.photos/346'}} " alt="foto" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="card-title">{{$advertisement->title}}</h5>
                            <p class="card-text">{{$advertisement->price}}</p>
                            <p class="card-text">{{$advertisement->description}}</p>
                            <a href="{{route('advertisement.show-detail', $advertisement)}}" class="btn btn-danger">{{__('ui.adDetail')}}</a>
                            <a href="{{route('categoryShow', $advertisement->category)}}" class="btn btn-success">{{__('ui.Category')}} {{__("ui." . $advertisement->category->name)}} </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 col-md-4 mb-3 w-100">
                    <h1 class="text-center">{{__('ui.noAdvertisement')}}</h1>
                </div>
                @endforelse
            </div>
        </div>
    </header>
</x-layout>
