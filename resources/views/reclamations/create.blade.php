@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <form action="{{ url('reclamations') }}" method="post">

                        {{ csrf_field() }}

                                <!-- <div class="form-group">
                                        <label for=""></label>
                                        <input type="text" name="etud" class="form-control">
                                </div> -->

                                <div class="form-group">
                                        <label for=""></label>
                                        <input type="text" name="gr" class="form-control">
                                </div>

                                <div class="form-group">
                                        <label for=""></label>
                                        <input type="text" name="mod" class="form-control">
                                </div>

                                <div class="form-group">
                                        <label for=""></label>
                                        <input type="text" name="contenu" class="form-control">
                                </div>

                                <div class="form-group">
                                        <input type="submit" class="form-control btn btn-primary" value="Envoyer">
                                </div>
                        </form>
                </div>
        </div>
</div>
@endsection