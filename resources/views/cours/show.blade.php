@extends('interface.index')
@section('hero')   
        @component('interface.hero')
                @slot('titre'){{$cour->titre}}@endslot
                @slot('sousTitre'){{$cour->sousTitre}}@endslot
        @endcomponent
@endsection

@section('contenu')   

                <div class="row probootstrap-gutter60">

                  <div class="row mb50">
                 <div class="col-md-12">
                 <div>{{$cour->contenu}}</div>
                 </div>
                </div>

        </div>
        <div class="col-md-12 text-center">
         <p>
                <a href="{{action('CourController@edit', $cour)}}">Modifier</a>
                |
                <a href="{{action('CourController@destroy', $cour)}}" onclick="return confirm('Voulez-vous vraiment supprimer cet article?')">Supprimer</a>
                </p>
         </div>       
         
      </div>
    </section>
@endsection

