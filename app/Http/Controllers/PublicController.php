<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        // $advertisements = Advertisement::take(5)->get()->sortByDesc('created_at');
        $advertisements = Advertisement::where('is_accepted', true)->take(5)->get()->sortByDesc('created_at');

        return view('welcome',compact('advertisements'));
    }

    public function categoryShow(Category $category) {
        return view('categoryShow', compact('category'));
    }

    public function setLanguage($lang){
        session()->put('locale',$lang);
        return redirect()->back();
        
    }
}
