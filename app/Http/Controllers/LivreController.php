<?php

namespace App\Http\Controllers;

use App\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\EmailLivreAjouter;

class LivreController extends Controller
{
    public function afficheFormulaire()
    {
        return view('pages.livres.ajout');
    }

    public function ajouterLivre(Request $request)
    {
        $livre = Livre::create([
            'titre'         => $request->titre,
            'description'   => $request->description,
            'image'         => $request->file('image')->store('galerie'),
            'user_id'       => Auth::user()->id,
        ]);

        $connecte = Auth::user();
        $connecte->notify(new EmailLivreAjouter($livre)) ;

        session()->flash('message', 'Félicitation votre livre a bien été ajouté avec succes !');
        return view('pages.livres.ajout');
    }
}
