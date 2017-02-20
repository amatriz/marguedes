@extends('layouts.site')
@section('content')

<div class="headerhome2"> 

    <div class="container">
        <div class="col-md-6">
            <div class="boxtextocomprador">
                <h1 style="margin-top: 0px !important; margin-bottom: 10px;"" >A solução ideal para você, sua empresa <br>
ou indústria</h1>
                <h3 style="margin-top: 0px !important; margin-bottom: 30px; color: #894294; font-weight: bold;">Principais vantagens:</h3>
                <ol>
                	<li>Assistente de Compras 24h</li>
                	<li>Histórico de Negócios</li>
                    <li>Ofertas no Vareja</li>
                    <li>Compras no Atacado <span>(para empresas)</span></li>
                    <li>Produtos Personalizados e Tradicionais</li>
                    <li>Milhares de Produtos</li>
                	<li>Centenas de Profissionais</li>
                	<li>Alerta de Ofertas</li>
                	<li>Economize Tempo</li>
                    <li>E mais</li>
                </ol>
            </div>
            <div class="clearfix"></div>    
        </div>

<div class="col-md-6">
    <div class="boxtextocomprador">

            @include('sites.cadastrocompra')
    </div>
             
</div>   
    </div>
</div>
<div class="container">
</div>
@endsection