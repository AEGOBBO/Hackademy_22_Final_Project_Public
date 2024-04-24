<?php

namespace App\Livewire;

use App\Models\Advertisement;
use Livewire\Component;

class AdvertisementCreateForm extends Component
{
    public $title;
    public $description;
    public $price;

    
    public function store(){
        
        $this->validate();

        Advertisement::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        session()->flash('message', 'Annuncio inserito correttamente!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.advertisement-create-form');
    }
}
