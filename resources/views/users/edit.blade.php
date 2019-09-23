@extends('interface.index')

@section('hero')
        @component('interface.hero')
                @slot('titre')
                Modification
                @endslot
                @slot('sousTitre')
                Vous êtes entrain de modifier cet usager.
                @endslot
        @endcomponent
@endsection
@section('contenu')
	<h2>Modifier un créateur de contenu</h2>
	@include('users.form')
@endsection
