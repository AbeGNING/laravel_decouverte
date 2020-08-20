<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProduitController extends Controller
{

    public function afficherPageProduit()
    {
        $titreController = 'Catalogue de nos offres';

        $les_produits = Produit::paginate(10);
        
        

        return view('pages.produit', compact('titreController', 'les_produits'));
    }

    public function afficherPageAccueil()
    {
        $titreController = 'Yeah bienvenue !';
        return view('pages.accueil', compact('titreController'));
    }

    public function afficherPageContact()
    {
        $titreController = 'Contactez nous please';
        return view('pages.contact', compact('titreController'));
    }
    
}
