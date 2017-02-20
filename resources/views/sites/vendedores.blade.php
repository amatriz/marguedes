@extends('layouts.site')
@section('content')

  <div class="headerhome2"> 

           <div class="container">
             <div class="col-md-6">
            <div class="boxtextocomprador">
                <h1 style="margin-top: 0px !important; margin-bottom: 10px;"" >O local certo para encontrar clientes.</h1>
                <h3 style="margin-top: 0px !important; margin-bottom: 30px; color: #894294; font-weight: bold;">Principais vantagens:</h3>
                <ol>
                	<li>Assistente de Vendas</li>
                	<li>Histórico de Negócios</li>
                  <li>Centenas de Clientes Potenciais </li>
                  <li>Prioridade nas Negociações</li>
                  <li>Filtragem de Clientes</li>
                  <li>Aumente a Taxa de Vendas</li>
                	<li>Economia com Marketing</li>
                	<li>Alerta de Ofertas</li>
                	<li>Economize Tempo</li>
                  <li>E mais</li>
                </ol>
            </div>
            <div class="clearfix"></div>    
        </div>
       <div class="col-md-5">
         @include('sites.cadastrovenda')
       </div>
             
		</div>
  </div>
  <div class="planos">
<div class="container">
 
</div>
</div>
@endsection