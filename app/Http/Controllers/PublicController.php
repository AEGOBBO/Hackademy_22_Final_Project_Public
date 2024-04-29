<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        $advertisements=Advertisement::take(5)->get()->sortByDesc('created_at');
        return view('welcome',compact('advertisements'));
    }
}
