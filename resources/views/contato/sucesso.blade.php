@extends('layouts.site')
@section('content')

<br><br><br><br><br><br>
<div class="alert alert-success" role="alert">
 <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="#" class="alert-link">Contato efetuado com  <b>Sucesso</b></a>
</div>
<br><br>
<div class="container">

<div class="col-md-8">
<h1>Contato Ordenext</h1>

<hr>
	
<section class="form">

<form method="POST" role="form" action="/send">

 {{ csrf_field() }}
<div class="form-group">
	<label for="nome">Nome</label>
	<input class="form-control" type="text" name="nome" required>
</div>
<div class="form-group">
	<label for="email">E-mail</label>
	<input class="form-control" type="text" name="email" required>
</div>
<div class="form-group">
	<label for="telefone">Telefone</label>
	<input class="form-control" type="text" name="telefone" required>
</div>
<div class="form-group">
	<label for="assunto">Assunto</label>
	<input class="form-control" type="text" name="assunto">
</div>
<div class="form-group">
	<label for="mensagem">Mensagem</label>
	
	<textarea class="form-control" rows="3" name="mensagem" required></textarea>
</div>
<input type="text" hidden="contato">
<button name="BTEnvia" type="submit" class="btn btn-primary">Solicitar</button>

</form>
</section>
</div>
</div>
@endsection