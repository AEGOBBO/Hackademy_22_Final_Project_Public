<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Advertisement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AdvertisementCreateForm extends Component
{
    use WithFileUploads;
    // #[Validate('required', message: 'Il campo titolo è richiesto')]
    // #[Validate('min:3', message: 'Il campo titolo deve essere minimo di 3 caratteri')]
    public $title;
    // #[Validate('required|min:3|max:255')]
    public $description;
    public $temporary_images=[];
    public $image=[];
    // #[Validate('required|numeric|gt:0')]
    public $price;
    // #[Validate('required')]
    public $category;

    protected $rules = [
        'title'=>'required|min:3',
        'description'=>'required|min:3|max:255',
        'price'=>'required|numeric|gt:0',
        'category'=>'required',
        'image.*'=>'image|max:1536',
        'temporary_images.*'=>'image|max:1536',
        ];

    protected $messages = [
        'required'=>'Il campo :attribute è richiesto',
        'min'=>'Il campo :attribute deve contenere :min caratteri',
        'max'=>'Il campo :attribute deve contenere :max caratteri',
        'image.*.max'=>'L\'immagine a caricare non può superare i :max Kb',
        'temporary_images.*.max'=>'L\'immagine a caricare non può superare i :max Kb',
        'numeric'=>'Il campo :attribute dev\'essere numerico',
        'gt:0'=>'Il campo :attribute dev\'essere maggiore di :gt',
        'image'=>'Il campo :attribute dev\'essere di tipo immagine',
        ];

    public function validationAttributes() 
    {
        return [
            'title' => 'titolo',
            'price' => 'prezzo',
            'description' => 'descrizione',
        ];
    }
    
    public function store(){
        
        $this->validate();

        $category=Category::find($this->category);
        $category->advertisements()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'user_id' => Auth::id(),
        ]);

        session()->flash('message', 'Annuncio inserito correttamente!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.advertisement-create-form');
    }
}
