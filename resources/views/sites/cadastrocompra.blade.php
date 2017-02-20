@include('partials.messages')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
{{ csrf_field() }}
<h3 style="margin-top: 50px !important;"><b style="color: #894294;">Cadastre-se Grátis</b> e encontre os melhores Produtos e Profissionais</h3>
<div class="panel panel-default">
  <div class="panel-body">
   <div class="form-group">
    <div class="col-md-12">
      <label for="nome" class="control-label">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome" name="name" required="Campo Necessário" autofocus="">
    </div>
    <div class="col-md-12">
      <label for="nome" class="control-label">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required="">
    </div>
 

 <div class="col-md-8">
      <label for="nome" class="control-label">Telefone</label>
      <input type="tel" class="form-control" id="telefone" name="phone" required="phone" placeholder="Ex.: 123456789">
    </div>

  
  <div class="col-md-7">
      <label for="senha" class="control-label">Senha</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required="">
    </div>

    <div class="col-md-5">
      <label for="nome" class="control-label">Confirmar Senha</label>
     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme a senha" required=''>
    </div>
  
 </div>
 <input type="hidden" value="1" name="perfil" />
 <input type="hidden" value="comprador" name="categoria" />
  <div class="form-group">
    <div class="col-md-6 col-md-offset-3">
      <button type="submit" class="btn btn-success btn-lg">Cadastre-se Já</button>
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

