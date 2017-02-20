@extends('layouts.sistema')

@section('content')
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Testando sistema de importação</a>
			</div>
		</div>
	</nav>
	<div class="container">
	
		<form  action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group{{ $errors->has('import_file') ? ' has-error' : '' }}">
			<input type="file" name='import'/>
			</div>
			<button class="btn btn-primary">Enviar Arquivo</button>

		</form>
	</div>
@endsection