@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Visualizar los Datos</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-unstyled pull-center">
                        <li>
                        <a  href="{{ route('get.sheet') }}" class="btn btn-danger btn-lg ">Datos</a>

                            
                        </li>
                    </ul>
                    <div class="btn-group">
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


