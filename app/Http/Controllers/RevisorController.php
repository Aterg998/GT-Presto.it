<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index() {
        $ad_to_check = Ad::where('is_accepted', null)->first();
        return view('revisor.index', compact('ad_to_check'));
    }

    public function acceptAd (Ad $ad) {
        $ad->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai aiutato le marmotte!');
    }

    public function rejectAd (Ad $ad) {
        $ad->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai comunque aiutato le marmotte!');
    }

    public function becomeRevisor ()
    {
       Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
       return redirect()->back()->with('message', 'Richiesta per diventare revisore inviata con successo');
    }

    public function makeRevisor (User $user)
    {
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Complimenti ora sei un revisore');
    }
}
