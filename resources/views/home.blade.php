@extends('layouts.sistema')

@section('content')
<br>
<div class="container-fluid">
@can('comprador')
    @include('admin.shared.box')

    @endcan
   <div class="jumbotron">
  <h1>Olá, sou o Ordenext!</h1>
  <p>O seu <b>Assistente Pessoal</b> para bons Negócios!  Estou em uma <b>versão BETA</b>, mas em constante evolução. </p>
  <hr>
  <p></p>
</div>
<div class="col-md-6">
<div class="panel panel-success">
@include('pedidos.shared.pedidosimples')
</div>
	<hr>
</div>

<div class="col-md-6">
  <div class="col-md-6">É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, </div> 
  <div class="col-md-6">É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, </div> 
</div>
</div> <!-- Container Fluid-->

<script src="assets/js/jquery-1.10.2.js"></script>
        	<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();
	
        	$.notify({
            	icon: 'pe-7s-timer',
            	message: "<h3>Seja bem vindo(a) ao Ordenext</h3> </b><h5>Estamos a sua disposição para te ajudar a fazer bons negócios.</h5> </b>"

            },{
                type: 'info',
                timer: 10000
            });

    	});
	</script>
</div>
@endsection
