<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function __contruct(){
        $this->middleware('auth')->only('becomeRevisor');
    }

    public function index(){
        $advertisement_to_check=Advertisement::where('is_accepted',null)->first();
        return view('revisor.index',compact('advertisement_to_check'));
    }
    
    public function acceptAdevertisement(Advertisement $advertisement){
        $advertisement->setAccepted(true);
        return redirect()->back()->with('message' ,'Annuncio accettato');
    }

    public function rejectAdevertisement(Advertisement $advertisement){
        $advertisement->setAccepted(false);
        return redirect()->back()->with('message' ,'Annuncio non accettato');
    }
}
