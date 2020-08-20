@php
    $titre = "Bien connecté!"
@endphp

@extends('welcome')

@section('contenu')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Accueil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="{{ route('livres.ajout') }}">Ajouter un livre</a> 
                    <a class="btn btn-success" href="">Liste des livres</a> 
                    
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
@endsection
