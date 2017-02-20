

<br><br><br><br>
<div class="col-md-8">
<h1>Fale com Ordenext:</h1>


<hr>
	
<section class="form">

<form method="POST" role="form" action="/enviar">

 {{ csrf_field() }}
<div class="form-group">
	<label for="nome">Nome</label>
	<input class="form-control" type="text" name="nome" required autofocus>
</div>
<div class="form-group">
	<label for="email">E-mail</label>
	<input class="form-control" type="email" name="email" required>
</div>
<div class="form-group">
	<label for="telefone">Telefone</label>
	<input class="form-control" type="tel" name="telefone" required>
</div>
<div class="form-group">
	<label for="assunto">Assunto</label>
	<input class="form-control" type="text" name="assunto" required>
</div>
<div class="form-group">
	<label for="mensagem">Mensagem</label>
	
	<textarea class="form-control" rows="3" name="mensagem" required></textarea>
</div>
<input type="text" hidden="contato">
<button name="BTEnvia" type="submit" class="btn btn-primary">Solicitar</button>
</div><br><br><br><br>
</form>
</section>

