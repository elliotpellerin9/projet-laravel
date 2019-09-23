@extends("interface.index")
@section('hero')
        @component('interface.hero')
                @slot('titre')
                À propos de {{$user->prenom}} {{$user->nom}}
                @endslot
                @slot('sousTitre')
                @endslot
        @endcomponent
@endsection

@section('contenu')

                <div class="row probootstrap-gutter60">
                        <div class="row mb50">
                                <div class="col-md-6"><h1>{{$user->prenom}} {{$user->nom}}</h1>
                                        <ul>
                                            <li>{{$user->tel}}</li>
                                            <li>{{$user->email}}</li>
                                            <li>{{$user->adresse}} {{$user->ville}} {{$user->province}}</li>
                                            <li>{{$user->codepostal}}</li>
                                        </ul>
                                        <h2>À propos de moi</h2>
                                         <p>{{$user->description}}</p>
                                         <h2>Mes projets</h2>
                                         @foreach($user->matieres as $matiere)
                                        <li>
                                                <a href="{{action('MatiereController@show', $matiere)}}">{{$matiere->titre}}</a>
                                        </li>
                                        @endforeach
                                </div>
                
                                <div class="col-md-6">
                                        <img src="{{$user->imageUrl}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded">
                                </div>
                        </div>

                </div>
        <div class="row mt50">
          <div class="col-md-12 text-center">
           <p>
                <a href="{{action('UserController@edit', $user)}}">Modifier</a>
                |
                <a href="{{action('UserController@destroy', $user)}}" onclick="return confirm('Voulez-vous vraiment supprimer cet article?')">Supprimer</a>
                </p>
          </div>
        </div>
        <div class="row mt50">
          <div class="col-md-12 text-center">
            <a href="{{action('UserController@create')}}" class="btn btn-primary btn-lg" role="button">Ajouter un créateur ou un utilisateur</a>
          </div>
        </div>

@endsection
