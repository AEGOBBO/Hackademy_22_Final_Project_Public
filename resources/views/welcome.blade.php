<x-layout>
{{-- <x-header/> --}}
    <x-header class="min-vh-100">
        <div class="container header-text">
            <div class="row">
                <div class="col-12 p-5 d-flex justify-content-center align-items-center d-flex flex-column">
                    <h1 class="text-center p-5">{{__('ui.welcomeOn')}} flowtter <span><img src="/media/water.png" class="my-logo" alt="" srcset=""></span></h1>
                    <div class="justify-content-center mb-5">
                        <a role="button" class="btn btn-custom" href="{{route('advertisement.create')}}">{{__('ui.addAdvertisement')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </x-header>
    <div class="position-relative my-container-wave">
        <img src="/media/white_wave.png" class="my-wave" srcset="">
    </div>
    <div class="py-5 text-center">
        <h3 class="fs-1">{{__('ui.latestAds')}}</h3>            {{-- I nostri annunci più recenti --}}
    </div>
    <div class="container">
        <div class="row">
            @forelse ($advertisements as $advertisement)
            <div class="col-12 col-md-4 mb-3">
                <a href="{{ route('advertisement.show-detail', $advertisement) }}" class="text-decoration-none">
                    <div class="card">
                        <img src="{{ !$advertisement->images()->get()->isEmpty() ? Storage::url($advertisement->images()->first()->path) : 'https://picsum.photos/346' }} "
                            alt="foto" class="img-card-custom">
                        <div class="card-body">
                            <h5 class="card-title">{{ $advertisement->title }}</h5>
                            <p class="card-text">{{ $advertisement->price }}</p>
                            <p class="card-text">{{ Str::limit($advertisement->description, 80) }}</p>

                            <div class="d-flex justify-content-end w-100 mt-3">
                                <a href="{{ route('categoryShow', $advertisement->category) }}"
                                    class="btn btn-custom"> {{ __('ui.Category') }}
                                    {{ __('ui.' . $advertisement->category->name) }}</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12 col-md-4 mb-3 w-100">
                <h1 class="text-center">{{__('ui.noAdvertisement')}}</h1>
            </div>
            @endforelse
        </div>
    </div>
    <div class="position-relative my-container-wave-upside">
        <img src="/media/white_wave_upside.png" class="my-wave-upside" srcset="">
    </div>
    <div class="my-surfers-cnt">
    </div>
{{-- </div> --}}
</x-layout>
