@extends('layouts.app')

@section('content')
<h1>Vous pouvez ajouter une reclamation</h1>
<!--{!! Form::open(['action' => 'ReclamController', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('body', 'Contenu')}}
        {{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Votre reclamation..'])}}
        </div>
{!! Form::close() !!}-->
<form method="POST" action="ReclamController.php">
    <div class="form-group">
        <input type="text">
        <input type="submit" value="Envoyer">
    </div>
</form> 

@endsection