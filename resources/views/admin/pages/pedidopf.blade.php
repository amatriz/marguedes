@extends('layouts.sistema')
@section('content')
<div class="container-fluid">
	<div class="col-md-7">
		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title"><b>Solicitar Orçamento</b></h3>
		  </div>
		  <div class="panel-body">
			@include('admin.shared.order')
		  </div>
		</div>
	</div>
</div>
@endsection