<x-layout>
    <header class=" pt-5">
        @if ($category)
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">{{__('ui.Category')}} {{$category->name}}</h1>
                </div>
            </div>
        </div>
        @else
        <div class="container-fluid">
            <div class="row">
                <h3 class="text-center">{{__('ui.noAdvertisements')}}</h3>
                <div class="text-center w-100">
                    <a role="button" class="btn btn-custom" href="{{route('advertisement.create')}}">{{__('ui.publishAdvertisements')}}</a>
                </div>
            </div>
        </div>
        @endif
    </header>
    <div class="container min-vh-100 pt-5">
        <div class="row">
            @forelse ($category->advertisements as $advertisement)
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="https://picsum.photos/346" alt="foto" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $advertisement->title }}</h5>
                            <p class="card-text">{{__('ui.adPrice')}} {{ $advertisement->price }} &euro;</p>
                            <p class="card-text">{{ Str::limit($advertisement->description, 30) }}</p>
                            <a href="{{route('advertisement.show-detail', $advertisement)}}" class="btn btn-danger">{{__('ui.adDetail')}}</a>                            
                        </div>
                        <div class="card-footer">
                            <p>{{ $advertisement->category->name }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 p-5 text-center">
                    <h3 class="pb-5">{{__('ui.noAdvertisement')}} <i class="fa-regular fa-face-sad-cry"></i></h3>
                    <h3>{{__('ui.publishAdvertisement')}} <a href="{{route('advertisement.create')}}" class=" text-decoration-none text-reset"> <i class="fa-solid fa-file-arrow-up"></i></a></h3>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
