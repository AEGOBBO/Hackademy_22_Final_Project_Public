<x-layout>
    <div class="container-fluid">
        <div class="row">
            <di class="col-12">
                <h1>{{adevertisement_to_check ? 'Annuncio da revisionare' : 'non ci sono annunci da revisionare'}}</h1>
            </di>
        </div>
    </div>
    @if (advertisement_to_check)
        
    @endif
</x-layout>