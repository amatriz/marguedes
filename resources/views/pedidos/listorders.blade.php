@extends('layouts.sistema')
@section('content')
<br>
<div class="panel panel-default">
  <div class="panel-body">
    <h2>Solicitações</h2>
  </div>
</div>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">SOLICITAÇÕES EM ABERTO: </div>
  <div class="panel-body">
  </div> @include('pedidos.shared.listarpedidos')
</div>
@endsection