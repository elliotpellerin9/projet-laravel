{{Form::model($user)}}
@if($errors->any())
<h1>Ouch! Il y a des erreurs.</h1>
{{$errors}}
@endif
<table border="1">
	<tbody>
		<tr>
		   <th>{{Form::label('nom', 'Nom')}}</th>
		   <td>{{Form::text('nom')}}
               @include('interface.erreur', ['champ'=>'nom'])</td>
		</tr>
		<tr>
		   <th>{{Form::label('prenom', 'Prénom')}}</th>
		   <td>{{Form::text('prenom')}}
            @include('interface.erreur', ['champ'=>'prenom'])</td>
		</tr>
		<tr>
		   <th>{{Form::label('name', 'Nom d\'usager')}}</th>
		   <td>{{Form::text('name')}}
            @include('interface.erreur', ['champ'=>'name'])</td>
		</tr>
		<tr>
		   <th>{{Form::label('password', 'Mot de passe')}}</th>
		   <td>{{Form::password('password')}}
            @include('interface.erreur', ['champ'=>'password'])</td>
		</tr>
		<tr>
		   <th>{{Form::label('email', 'Courriel')}}</th>
		   <td>{{Form::email('email')}}
            @include('interface.erreur', ['champ'=>'email'])</td>
		</tr>
                <tr>
		   <th>{{Form::label('statut', 'Statut')}}</th>
		   <td>{{Form::text('statut')}}
            @include('interface.erreur', ['champ'=>'statut'])</td>
		</tr>
		<tr>
		   <th>{{Form::label('tel', 'Téléphone')}}</th>
		   <td>{{Form::text('tel')}}
            @include('interface.erreur', ['champ'=>'tel'])</td>
		</tr>
		<tr>
		   <th>{{Form::label('adresse', 'Adresse')}}</th>
		   <td>{{Form::text('adresse')}}
            @include('interface.erreur', ['champ'=>'adresse'])</td>
		</tr>
		<tr>
		   <th>{{Form::label('ville', 'Ville')}}</th>
		   <td>{{Form::text('ville')}}
            @include('interface.erreur', ['champ'=>'ville'])</td>
		</tr>
		<tr>
		   <th>{{Form::label('province', 'Province')}}</th>
		   <td>{{Form::text('province')}}
            @include('interface.erreur', ['champ'=>'province'])</td>
		</tr>
		<tr>
		   <th>{{Form::label('codepostal', 'Code Postal')}}</th>
		   <td>{{Form::text('codepostal')}}
            @include('interface.erreur', ['champ'=>'codepostal'])</td>
		</tr>
		<tr>
		   <th>{{Form::label('description', 'Description')}}</th>
		   <td>{{Form::textarea('description')}}
            @include('interface.erreur', ['champ'=>'description'])</td>
		</tr>
		<tr>
			<th>{{Form::submit('Envoyer')}}</th>
		</tr>
	</tbody>
</table>
{{Form::close()}}
