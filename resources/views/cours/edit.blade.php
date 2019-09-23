@extends('interface.index')

@section('hero')   
        @component('interface.hero')
                @slot('titre')
                Modification
                @endslot
                @slot('sousTitre')
                Vous êtes entrain de modifier cette cours.
                @endslot
        @endcomponent
@endsection
@section('contenu')
	<h2>Modifier un cours</h2>
	@include('cours.form')
@endsection
