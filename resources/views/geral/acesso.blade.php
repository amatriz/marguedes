@extends('layouts.site')
@section('content')
<div class="container">
	@include('layouts.menu')
	<hr>
	<div class="col-md-6">
		@include('auth.cadastro')
	</div>
	<div class="col-md-6">
		@include('auth.login')
	</div>
	<h1>Negocie com mais segurança</h1>
</div>

@endsection