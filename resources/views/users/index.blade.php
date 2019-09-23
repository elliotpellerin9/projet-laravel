@extends("interface.index")
@section('hero')
        @component('interface.hero')
                @slot('titre')
                À propos de notre équipe
                @endslot
                @slot('sousTitre')
                Nos créateur de contenu sont disponible 24/24
                @endslot
        @endcomponent
@endsection

@section('contenu')
<div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
            <h2>Nos créateur de contenu</h2>
          </div>
        </div>
                <div class="row probootstrap-gutter60">


        @foreach($users as $user)

                @if($user->statut==1)
                @component('interface.matiere')
                @slot('icone')
                <img src="{{$user->imageUrl}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded">
                @endslot
                @slot('titre')
                 <h3>{{$user->prenom}} {{$user->nom}}</h3>
                @endslot

                @slot('lien')
                {{action('UserController@show', $user)}}
                @endslot


                @slot('option')
                <p>
                <a href="{{action('UserController@edit', $user)}}">Modifier</a>
                |
                <a href="{{action('UserController@destroy', $user)}}" onclick="return confirm('Voulez-vous vraiment supprimer cet article?')">Supprimer</a>
                </p>
                @endslot

                @slot('contenu')
                <p>{{$user->email}}</p>
                @endslot

                @slot('lien')
                 <a href="{{action('UserController@show', $user)}}">En savoir plus</a>
                @endslot


                @slot('option')
                <p>
                <a href="{{action('UserController@edit', $user)}}">Modifier</a>
                |
                <a href="{{action('UserController@destroy', $user)}}" onclick="return confirm('Voulez-vous vraiment supprimer cet article?')">Supprimer</a>
                </p>
                @endslot

                @endcomponent
                @endif

	@endforeach

        </div>
        <div class="row mt50">
          <div class="col-md-12 text-center">
            <a href="{{action('UserController@create')}}" class="btn btn-primary btn-lg" role="button">Ajouter un créateur ou un utilisateur</a>
          </div>
        </div>

@endsection
