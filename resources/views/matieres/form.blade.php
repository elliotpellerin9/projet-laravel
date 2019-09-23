{{Form::model($matiere)}}.
@if($errors->any())
<h1>Ouch! Il y a des erreurs.</h1>
{{$errors}}
@endif
<table border="1" style="width:100%;">
	<tbody>
		<tr>
		   <th>{{Form::label('titre', 'Titre')}}</th>
		   <td>{{Form::text('titre')}}
         @include('interface.erreur', ['champ'=>'titre'])</td>
		</tr>
		<tr>

		   <th>{{Form::label('icone', 'Icone')}}</th>
			<td>{{Form::text('icone')}}
         @include('interface.erreur', ['champ'=>'icone'])</td>
		</tr>
		<tr>
		   <th>{{Form::label('contenu', 'Contenu')}}</th>
			<td>{{Form::text('contenu')}}
			@include('interface.erreur', ['champ'=>'contenu'])</td>
		</tr>
		<tr>
			<th>{{Form::submit('Envoyer')}}</th>
		</tr>
	</tbody>
</table>
{{Form::close()}}
