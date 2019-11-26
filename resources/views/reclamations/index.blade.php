@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="">Mes reclamations</h1>
            <div class="pull-center">
                <a href="{{ url('reclamations/create') }}" class="btn btn-success">Nouvelle reclamation</a>
            </div>

            <table class="table">
                <head>
                <tr class="">
                    <th class="">Module</th>
                    <th class="">Reclamation</th>
                </tr>
                </head>

                <body class="">
                @foreach($reclamation as $reclam)
                    <tr class="">
                        <td class="">{{ $reclam->CodeMod }}</td>
                        <td class="">{{ $reclam->reclamation }}</td>
                        <td class="">
                            <a href="" class="btn btn-primary">Editer</a>
                            <a href="" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
                </body>

            </table>
        </div>
    </div>
</div>
@endsection