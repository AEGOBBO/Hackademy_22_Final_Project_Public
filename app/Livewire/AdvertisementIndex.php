<?php

namespace App\Livewire;

use Livewire\Component;

class AdvertisementIndex extends Component
{

    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();
        session()->flash('message', 'Annuncio eliminato con successo!');
    }
    
    public function render()
    {
        return view('livewire.advertisement-index');
    }
}
