@extends('layouts.site')
@section('content')

<div class="headerhome2"> 
	<div class="container"> 
	<div class="col-md-6 col-xs-12">
	 <div class="home1">  
	<h1 style="text-align: right; font-size: 46px;">Se você precisa de <b style="color: #894294">Produtos</b> ou de <b style="color: #894294">Profissionais</b>, o <b>Ordenext </b>vai te ajudar
	<b>Encontrar!</b>
	</h1>
	<hr>
	</div>   
	</div>               
	<div class="col-md-5 col-xs-12">
	<div class="home2"> 
	@include('sites.cadastrocompra') 
	</div>
	</div>  
	
        
	</div> <!-- Container -->
</div>

	<h1 style="text-align: center; color: #B20000; margin-top: 60px;">Como funciona o Ordenext?</h1>
	<h3 style="margin-bottom: 30px">Nós vamos te ajudar  encontrar o Produto ou Profissional que você procura</h3>
 
	

<div class="funciona">
<div class="container">
	<div class="col-md-4">
		<img class="img-responsive" src="/image/descreve.png" alt="[Cadastro Ordenext]">
		<h3 style="text-align: left">Cadastre-se Grátis</h3>
		<p>O cadastro é muito Simples, Rápido e Gratuíto. Tenha acesso a um Painel excluivo onde você acompanha suas solitações e orçamentos </p>
	</div>
	
	<div class="col-md-4">
		<img class="img-responsive" src="/image/cadastrese.png" alt="[Descreve Ordenext]">
		<h3 style="text-align: left">Descreva a sua Necessidade</h3>
		<p>Solicitar seu orçamento é muito Simples, mas para tornar a busca mais eficiente, precisamos que você explique qual a sua necessidade</p>
	</div>
	
	<div class="col-md-4">
		<img class="img-responsive" src="/image/compare.png" alt="[Avalie Ordenext]">
		<h3 style="text-align: left">Compare e Escolha</h3>
		<p>São milhares de Produtos e Profissinais a sua disposição. Economize tempo e dinheiro com nosso assistente.</p>
	</div>
	<hr>

	</div>	
</div>

<!-- Main 2-->
<!-- Painel -->

<div class="main2">

<div class="container">
<div class="col-md-6 col-xs-12"><img class="img-responsive" src="image/note.png" alt="">
</div>

<div class="col-md-6 col-xs-12">
<h1>O seu Assistente 24 horas:</h1>
<h2>Gerencie, Analise e Solicite.</h2>

	<div>
	<p>Por meio de um <b>Painel de controle</b> exclusivo, o <b>Ordenext</b> te ajuda a solicitar, encontrar e responder Orçamentos, aumentando assim as suas chances de bons negócios .</p>
	</br>
	<b>Orçamentos:</b> Formulário de solicitações de orçamentos Pessoais e ou Compras no Atacado.
	</br>
	<b>Notificações:</b> O assistente Ordenext te envia notificações por e-mail e via Painel.
	</br>
	<b>Filtros:</b> Os filtros te ajudam encontrar a melhor solução para sua necessidade.
	</div>			
</div></div></div>

<div class="main3"><div class="container">
	@include('sites.home.main2')
	</div></div>



@endsection