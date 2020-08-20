<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProduitController@afficherPageAccueil')->name("accueil");
Route::get('/contact', 'ProduitController@afficherPageContact')->name("contact");
Route::get('/produit', 'ProduitController@afficherPageProduit')->name("produit");

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/nouveau_livre', 'LivreController@afficheFormulaire')->name("livres.ajout");
Route::post('/nouveau_livre', 'LivreController@ajouterLivre')->name("livres.ajout");

