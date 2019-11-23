@extends('layouts.app')

@section('content')
<h1>Vous pouvez ajouter une reclamation</h1>
<!--{!! Form::open(['action' => 'ReclamController', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('body', 'Contenu')}}
        {{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Votre reclamation..'])}}
        </div>
{!! Form::close() !!}-->
<form action="{{ route('reclamation.store') }}" method="POST">
<div class="form-group">
        <input type="text" class="form-control" name="etud" placeholder="entrez votre matricule"><br>        
        <input type="text" class="form-control" name="gr" placeholder="entrez le groupe"><br>
        <input type="text" name="mod" class="form-control" placeholder="entrez le module"><br>
</div>
<div class="form-group">     
        <textarea name="contenu" class="form-control" placeholder="votre reclamation" rows="10"></textarea><br>
</div>
<div>
        <button type="submit" class="btn btn-succes">Envoyer</button>
</div>

</form>

@endsection