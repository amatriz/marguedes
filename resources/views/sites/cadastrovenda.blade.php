@include('partials.messages')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/register2') }}">
{{ csrf_field() }}
<h3 style="margin-top: 50px !important;"><b style="color: #894294;">Cadastre-se agora</b>, vamos te ajudar encontrar clientes potenciais</h3>
<div class="panel panel-default">
  <div class="panel-body">
   <div class="form-group">
    <div class="col-md-12">
      <label for="nome" class="control-label">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome" name="name" required="Campo Necessário" autofocus="">
    </div>
    </div>
    <div class="form-group">
    <div class="col-md-12">
      <label for="nome" class="control-label">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required="">
    </div>
    </div>

    <div class="form-group">
 <div class="col-md-9">
      <label for="nome" class="control-label">Telefone</label>
      <input type="tel" class="form-control" id="telefone" name="phone" required="phone" placeholder="Digite seu celular - Apenas Numeros">
    </div>
       </div>

    <div class="form-group">
<div class="col-md-12">
	<label for="categoria">Área de Atuação</label>
	<select class="form-control" id="categoria" name="categoria">
  <option value="venda">Venda de Produtos</option>
  <option value="profissionais">Venda de Serviços</option>
  <option value="ambos">Produtos e Serviços</option>

</select>
</div>
  </div>

    <div class="form-group">
  
  <div class="col-md-7">
      <label for="senha" class="control-label">Senha</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required="">
    </div>

    <div class="col-md-5">
      <label for="nome" class="control-label">Confirmar Senha</label>
     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme a senha" required=''>
    </div>
  
 </div>
 <input type="hidden" value="2" name="perfil" />
  <div class="form-group">
    <div class="col-md-6 col-md-offset-3">
      <button type="submit" class="btn btn-primary btn-lg">Cadastre-se Já</button>
    </div>
  </div>                 
</form>
<script>
  $(document).ready(function(){
  $('#telefone').mask('(00) 0000-00000');
})
</script>
</div>
</div>

