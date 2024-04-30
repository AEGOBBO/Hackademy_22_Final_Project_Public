<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Advertisement;
use Illuminate\Support\Facades\Auth;

class AdvertisementCreateForm extends Component
{
    // #[Validate('required', message: 'Il campo titolo è richiesto')]
    // #[Validate('min:3', message: 'Il campo titolo deve essere minimo di 3 caratteri')]
    public $title;
    // #[Validate('required|min:3|max:255')]
    public $description;
    // #[Validate('required|numeric|gt:0')]
    public $price;
    // #[Validate('required')]
    public $category;

    protected $rules = [
        'title'=>'required|min:3',
        'description'=>'required|min:3|max:255',
        'price'=>'required|numeric|gt:0',
        'category'=>'required',
        ];

    protected $messages = [
        'required'=>'Il campo :attribute è richiesto',
        'min'=>'Il campo :attribute deve contenere :min caratteri',
        'max'=>'Il campo :attribute deve contenere :max caratteri',
        'numeric'=>'Il campo :attribute dev\'essere numerico',
        'gt:0'=>'Il campo :attribute dev\'essere maggiore di :gt',
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
