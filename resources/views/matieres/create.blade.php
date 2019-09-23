@extends('interface.index')
@section('hero')   
        @component('interface.hero')
                @slot('titre')
                Création d'une matière
                @endslot
                @slot('sousTitre')
                Vous êtes entrain de créer une matière.
                @endslot
        @endcomponent
@endsection
@section('contenu')
	<h2>Ajouter une matière</h2>
	@include('matieres.form')
@endsection
