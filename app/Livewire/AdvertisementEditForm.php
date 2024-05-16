<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Advertisement;
use Livewire\WithFileUploads;

class AdvertisementEditForm extends Component
{
    use WithFileUploads;
    
    public $advertisement;
    public $title;
    public $description;
    public $price;
    public $image;
    public $old_image;
    public $category;

    public function mount(){
        $this->title = $this->advertisement->title;
        $this->description = $this->advertisement->description;
        $this->price = $this->advertisement->price;
        $this->old_image = $this->advertisement->image;
        $this->category = $this->advertisement->category;
        
    }

    public function update(){
        $this->advertisement->update([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $this->image ? $this->advertisement->image : $this->advertisement->image,
            'category' => $this->category,
        ]);

        session()->flash('message', 'Annuncio modificato con successo!');
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.advertisement-edit-form');
    }
}
