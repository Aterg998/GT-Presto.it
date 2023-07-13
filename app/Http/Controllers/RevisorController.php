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
        $ad_to_check = Ad::where('is_accepted', null)->whereNot('user_id', Auth::user()->id)->first();
        return view('revisor.index', compact('ad_to_check'));
    }

    public function acceptAd (Ad $ad) {
    
        $ad->setAccepted(true);
        Auth::user()->last_ad_revised = $ad->id;
        Auth::user()->save();
        return redirect()->back()->with('message', 'Complimenti, hai aiutato le marmotte!');
    }

    public function rejectAd (Ad $ad) {
        $ad->setAccepted(false);
        Auth::user()->last_ad_revised = $ad->id;
        Auth::user()->save();
        return redirect()->back()->with('message', 'Complimenti, hai comunque aiutato le marmotte!');
    }

    public function restoreAd (Ad $ad) {
        $ad->setAccepted(null);
        Auth::user()->last_ad_revised = null;
        Auth::user()->save();
        return redirect()->back()->with('message', 'Azione annullata!');
    }

    public function makeRevisor (User $user)
    {
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Complimenti! L\'utente è diventato revisore');
    }

    public function application () {
        return view ('revisor.application');
    }
    
    public function send(Request $request, User $user) {
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'country' => $request->country,
            'birth_date' => $request->birth_date,
            'zip_code' => $request->zip_code,
            'city' => $request->city,
            'address' => $request->address,
        ]);
        $user->save();

        Mail::to('admin@presto.it')->send(new BecomeRevisor($user));
        return redirect()->back()->with('message', 'Richiesta per diventare revisore inviata con successo');
    }
}
