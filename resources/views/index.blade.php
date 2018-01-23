@extends('layouts.app')

@section('content')
	<div class="container"> 
		<div class="panel panel-primary"> 
			<div class="panel-heading clearfix">
		      	<h4 class="panel-title pull-left" style="padding-top: 7.5px;">ApiSheets</h4>
		      	<div class="btn-group pull-right">
			        <a  href="{{ url('/') }}" class="btn btn-danger btn-sm">Atras</a>
		      	</div>
		    </div>
		  	<div class="panel-body">
		    	<div class="row">
				    <div class="col-md-8 col-md-offset-2">
				    	<table class=" table table-striped table-bordered table-hover table-sm">
					        <thead>
						        <tr>
						            @foreach($headers as $header)
						                <th>{{ $header }}</th>
						            @endforeach
						        </tr>
					        </thead>
					        <tbody>
					        @foreach($rows as $row)
					            <tr>
					                @foreach($row as $value)
					                    <td>{{ $value }}</td>
					                @endforeach
					            </tr>
					        @endforeach
					        </tbody>
					    </table>
				    </div>
			    </div>
		  	</div>
		</div>		
    </div>
@endsection