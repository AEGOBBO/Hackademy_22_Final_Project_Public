<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Advertisement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

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
    public $temporary_image;

    protected $rules = [
        'title'=>'required|min:3',
        'description'=>'required|min:3|max:8000',
        'price'=>'required|numeric|gt:0',
        'category'=>'required',
        'image.*'=>'required|image|max:1536',
        'temporary_image.*'=>'image|max:1536',
        ];

    protected $messages = [
        'required'=>'Il campo :attribute è richiesto',
        'min'=>'Il campo :attribute deve contenere :min caratteri',
        'max'=>'Il campo :attribute deve contenere :max caratteri',
        'image.*.max'=>'L\'immagine a caricare non può superare i :max Kb',
        'temporary_image.*.max'=>'L\'immagine a caricare non può superare i :max Kb',
        'temporary_image.*.image'=>'I file devono essere immagini',
        'numeric'=>'Il campo :attribute dev\'essere numerico',
        'gt:0'=>'Il campo :attribute dev\'essere maggiore di :gt',
        'image'=>'Il campo :attribute dev\'essere di tipo immagine',
        ];

    public function mount(){
        $this->title = $this->advertisement->title;
        $this->description = $this->advertisement->description;
        $this->price = $this->advertisement->price;
        $this->old_image = $this->advertisement->image;
        $this->category = $this->advertisement->category;
        
    }

    public function update(){
        
        $this->validate();

        $this->advertisement->update([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $this->image ? $this->advertisement->image : $this->advertisement->image,
            'category' => $this->category,
            'is_accepted'=>false,
        ]);

        session()->flash('message', 'Annuncio modificato con successo!');
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.advertisement-edit-form');
    }
}
