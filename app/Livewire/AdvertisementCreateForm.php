<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Advertisement;

class AdvertisementCreateForm extends Component
{
    public $title;
    public $description;
    public $price;
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
    
    
    public function store(){
        
        $this->validate();

        $category=Category::find($this->category);
        $category->advertisement()->create([
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
