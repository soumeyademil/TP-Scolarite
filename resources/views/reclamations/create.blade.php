@extends('layouts.app')

@section('content')
<h1>Vous pouvez ajouter une reclamation</h1>
{!! Form::open(['action' => 'ReclamController', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('body', 'Contenu')}}
        {{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Votre reclamation..'])}}
        </div>
{!! Form::close() !!}
<!--<form method="post" action="C:/xampp/htdocs/TP-Scolarite/app/Http/Controllers/ReclamController.php">
        <input type="text" name="contenu">
        <input type="submit" value="Envoyer">
</form> -->

@endsection