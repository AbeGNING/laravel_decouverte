@php
    $titre = $titreController   /// titre de ma page web
@endphp

@extends('welcome')  <!--- page Accueil hérite du gabarit Welcome ---->

@section('contenu')   <!--- contenu a afficher a la section (yield) "contenu" -->

<div class="container">
    <div class="row">
        <div class="col-md-12 pb-5 pt-5">
        <div class="lead">
            <b>Texte Accueil</b> <br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor mollitia vitae enim veritatis, numquam earum laboriosam alias corporis iusto a, accusantium aspernatur quasi quia consequatur illo aperiam perferendis quod est.
        </div>
        </div>
    </div>
</div>

@stop