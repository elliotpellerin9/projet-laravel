@extends('interface.index')
@section('hero')
        @component('interface.hero')
                @slot('titre'){{$matiere->titre}}@endslot
                @slot('sousTitre'){{$matiere->contenu}}@endslot
        @endcomponent
@endsection

@section('contenu')
<div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
            <h2>Voici la liste de cours</h2>
          </div>
        </div>
          <div class="row probootstrap-gutter60">

        @foreach($matiere->cour as $cour)
                @component('interface.cour')

                @slot('titre')
                  <h3>{{$cour->titre}}</h3>
                @endslot

                @slot('sousTitre')
                  <p>{{$cour->sousTitre}}</p>
                @endslot

                @slot('lien')
                   <a href="{{action('CourController@show', $cour)}}">En savoir plus</a>
                @endslot

                @slot('option')
                <p>
                  <a href="{{action('CourController@edit', $cour)}}">Modifier</a>
                  |
                  <a href="{{action('CourController@destroy', $cour)}}" onclick="return confirm('Voulez-vous vraiment supprimer cet article?')">Supprimer</a>
                </p>
                @endslot

                @endcomponent

	@endforeach
          </div>
        <div class="row mt50">
          <div class="col-md-12 text-center">
            <a href="{{action('CourController@create', $matiere)}}" class="btn btn-primary btn-lg" role="button">Ajouter un cours</a>
          </div>
        </div>
         <div class="row mt50">
          <div class="col-md-12 text-center">
            <a href="{{action('UserController@index')}}" class="btn btn-primary btn-lg" role="button">En savoir plus sur notre équipe</a>
          </div>
        </div>
      </div>
    </section>
@endsection
