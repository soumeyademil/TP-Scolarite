@extends('layouts.app')

@section('content')
<h1>Vous pouvez ajouter une reclamation</h1>
{!! Form::open(['action' => 'ReclamController', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('body', 'Contenu')}}
        {{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Votre reclamation..'])}}
        </div>
{!! Form::close() !!}

@endsection