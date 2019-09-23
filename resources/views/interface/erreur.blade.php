@if($errors->has($champ))
<span class="error" style="color:red;font-weight:bold;">
{{$errors->first($champ)}}
</span>
@endif