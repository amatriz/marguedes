@extends('layouts.sistema')
@section('content')
<br>

<div class="page-header">
  <h1>Agora você tem a opção<small>Importar do Excel</small></h1>
  <h3>Cadastre suas solicitações de Orçamento no Excel e importe no Ordenext</h3>
</div>
@include('pessoajuridica.includes.pedido')

<div class="panel panel-success">
  <!-- Default panel contents -->
  <div class="panel-heading">Solicitação de Orçamentos via Excel</div>
  <div class="panel-body">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/pedidopj/importar/') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="col-md-4"><input type="file" name="file" /></div> 
        <div class="col-md-6"> <button type="submit" class="btn btn-primary">Importar Pedido </button></div>  
    </form>
  </div> 
  </div>

<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
@endsection