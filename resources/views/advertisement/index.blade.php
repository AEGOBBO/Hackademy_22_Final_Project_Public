<x-layout>
    <header class="min-vh-100 pt-5">
        @if (count($advertisements))
            <div class="container-fluid pb-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center title-index-pages p-5">{{ __('ui.allAdvertisements') }}</h1>
                    </div>
                </div>
            </div>
        @else
            <div class="container-fluid">
                <div class="row">
                    <h3 class="text-center">{{ __('ui.noAdvertisements') }}</h3>
                    <div class="text-center w-100">
                        <a role="button" class="btn btn-custom"
                            href="{{ route('advertisement.create') }}">{{ __('ui.addAdvertisement') }}</a>
                    </div>
                </div>
            </div>
        @endif
        <div class="container">
            <div class="row">
                @forelse ($advertisements as $advertisement)
                    <div class="col-12 col-md-4 mb-3">
                        <a href="{{ route('advertisement.show-detail', $advertisement) }}" class="text-decoration-none">
                            <div class="card">
                                <img src="{{ !$advertisement->images()->get()->isEmpty() ? $advertisement->images()->first()->getUrl(400,300) : 'https://picsum.photos/346' }} "
                                    alt="foto" class="img-card-custom img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $advertisement->title }}</h5>
                                    <p class="card-text">{{ $advertisement->price }}</p>
                                    <p class="card-text">{{ Str::limit($advertisement->description, 80) }}</p>

                                    <div class="d-flex justify-content-end w-100 mt-3">
                                        <a href="{{ route('categoryShow', $advertisement->category) }}"
                                            class="btn btn-custom">{{ __('ui.Category') }}
                                            {{ __('ui.' . $advertisement->category->name) }}</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                <div class="col-12 mt-5">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">Non ci sono risultati per questa ricerca </p>
                    </div>
                </div>
                @endforelse
                <div class="col-12 mt-5 mb-5">
                    {{ $advertisements->links() }}
                </div>
            </div>
        </div>
    </header>
</x-layout>
