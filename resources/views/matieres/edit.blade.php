@extends('interface.index')

@section('hero')
        @component('interface.hero')
                @slot('titre')
                Modification
                @endslot
                @slot('sousTitre')
                Vous êtes entrain de modifier cette matière.
                @endslot
        @endcomponent
@endsection
@section('contenu')
	<h2>Modifier une matière</h2>
	@include('matieres.form')
@endsection
