@extends('interface.index')
@section('hero')   
        @component('interface.hero')
                @slot('titre')
                Création d'un cours
                @endslot
                @slot('sousTitre')
                Vous êtes entrain de créer un cours.
                @endslot
        @endcomponent
@endsection
@section('contenu')
	<h2>Ajouter un cours</h2>
	@include('cours.form')
@endsection
