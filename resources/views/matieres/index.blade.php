@extends("interface.index")
@section('hero')
        @component('interface.hero')
                @slot('titre')
                  Bienvenue
                @endslot
                @slot('sousTitre')
                  Nous vous offrons la meilleur formation Laravel au Monde !
                @endslot
        @endcomponent
@endsection

@section('contenu')
<div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
            <h2>Voici les sujets abordée lors de la formation</h2>
          </div>
        </div>
          <div class="row probootstrap-gutter60">

        @foreach($matieres as $matiere)

                @component('interface.matiere')

               @slot('icone')
               <div class="icon"><i class="{{$matiere->icone}}"></i></div>
                @endslot

                @slot('titre')
                  <h3>{{$matiere->titre}}</h3>
                @endslot

                @slot('contenu')
                <p>{{$matiere->contenu}}</p>
                @endslot

                @slot('lien')
                 <a href="{{action('MatiereController@show', $matiere)}}">En savoir plus</a>
                @endslot

                @slot('option')
                <p>
                <a href="{{action('MatiereController@edit', $matiere)}}">Modifier</a>
                |
                <a href="{{action('MatiereController@destroy', $matiere)}}" onclick="return confirm('Voulez-vous vraiment supprimer cet article?')">Supprimer</a>
                </p>
                @endslot

                @endcomponent

	        @endforeach

        </div>
        <div class="row mt50">
          <div class="col-md-12 text-center">
            <a href="{{action('MatiereController@create', $matiere)}}" class="btn btn-primary btn-lg" role="button">Ajouter une matière</a>
          </div>
        </div>
         <div class="row mt50">
          <div class="col-md-12 text-center">
            <a href="{{action('UserController@index')}}" class="btn btn-primary btn-lg" role="button">En savoir plus sur notre équipe</a>
          </div>
        </div>

@endsection
