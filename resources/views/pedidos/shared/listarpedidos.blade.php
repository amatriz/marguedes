<div class="table-responsive">
<table class="table table-hover">
<thead>
	<tr>
		
		<td><b>Produto</b></td>
		<td><b>Descrição</b></td>
		<td style="width: auto;"></td>
		<td style="width: auto;"></td>
		<td style="width: auto;"></td>
	</tr>
</thead>
	
	<tbody>
	<tr>@forelse ($data as $order)
		<td>{{$order->titulo}}</td>
		<td>{{$order->descritivo}}</td>
		<td style="width: 20%;"></td>
		<td style="width: 90px;"><button class="btn btn-primary" > Orçamentos <span class="badge">1</span></button></td>
		<td style="width: 80px;"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</button></td>
		<td style="width: 70px;"><button class="btn btn-danger"> <span class="glyphicon glyphicon-remove" aria-hidden="true"> Excluir</button></td>
		
	</tr>
	
	</tbody>
	
@empty
		<div class="alert alert-danger" role="alert"><h5> Você ainda não fez nenhum pedido de  Orçamento <span style="font-size: 26px; color: red;"> :(</span></h5></div>
			
	@endforelse
</table>
</div>