@extends('layouts.sistema')

@section('content')
<div class="container">
	<nav class="navbar navbar-default">

		<div class="container-fluid">

			<div class="navbar-header">

				<a class="navbar-brand" href="#">Import - Export in Excel and CSV Laravel 5</a>

			</div>

		</div>

	</nav>

	<div class="container">

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/produtos/add/') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
           
			<input type="file" name="file" />

			                                <button type="submit" class="btn btn-primary">
                                    Enviar arquivo
                                </button>

		</form>

	</div>
</div>
@endsection