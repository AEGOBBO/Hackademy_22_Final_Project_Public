<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function __contruct(){
        $this->middleware('auth')->only('revisor.index');
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

    public function becomeRevisor(){
        try {
            Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
            
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'La tua richiesta non è andata a buon fine. Ritenta più tardi.');
        }
        return redirect('/')->with('message', 'La tua richiesta è stata inoltrata con successo');
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ['email=>$user->email']);
        return redirect('/')->with('message', 'Complimenti! L\'utente è diventato revisore');
    }
}
