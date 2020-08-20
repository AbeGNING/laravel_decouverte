@php
    $titre = $titreController   /// titre de ma page web
@endphp

@extends('welcome')  <!--- page Accueil hérite du gabarit Welcome ---->

@section('contenu')   <!--- contenu a afficher a la section (yield) "contenu" -->

<div class="container">
    <div class="row">
        <div class="col-md-12 pb-5 pt-5">
            
            @if ($les_produits->count() > 0)
                <div class="card">
                  <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Categorie</th>
                                <th>Prix</th>
                                <th>Origine</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($les_produits as $produit)
                            <tr>
                                <td>{{ $produit->nom }}</td>
                                <td>{{ $produit->categorie }}</td>
                                <td>{{ $produit->prix }}</td>
                                <td>{{ $produit->origine }}</td>
                            </tr>                            
                            @endforeach
                            
                        </tbody>
                    </table>
                   <div class="justify-content-center d-flex">
                    {{ $les_produits->links() }}
                   </div>
                </div>
                </div>
            @else
                <p> Aucun produit n'a été enregistré </p>
            @endif
            
        </div>
        <div class="col-md-12">

        </div>
    </div>
</div>

@stop