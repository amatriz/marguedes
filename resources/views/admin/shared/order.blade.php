


<form  role="form" method="POST" action="salvapedido">
{{ csrf_field() }}
<div class="form-group">
	<label class="radio-inline">
  <input id="opt-produto" type="radio" name="produtoservice" value="Produto" onclick="objetivo();" required> <b>Preciso de Produto</b>
</label>
<label class="radio-inline">
  <input id="opt-service" type="radio" name="produtoservice" value="Prestador" onclick="objetivo();"> <b>Preciso de Serviço / Profissionais</b>
</label>

</div>	
<div class="form-group">
	<label  for="">Titulo do Produto ou Serviço: </label>	
	<input name="titulo" id="titulo" type="text" class="form-control" required>  	
</div>
<div class="form-group">
<label  for="">Detalhe do Produto ou Serviço:</label>
<textarea  class="form-control" name="detalhes" minlength="15" id="detalhes" cols="30" rows="5" required></textarea>
</div>
<div class="form-group">
	<label  for="">Categoria : </label>	
	<input name="categoria" id="categoria" type="text" required placeholder="Exemplo: Informática, Casa e Decoração, Moda e Calçados etc... " class="form-control">  	
</div>

<div id="produto" class="form-group "><label  for="">Qual o valor médio na compra <span style="font-size:11px;"> ( Opcional )</span></label>
<input type="text" class="form-control col-md-12" name="valormedio">
</div>

<div id="service" class="form-group "><label  for="">Melhor horário para atendimento <span style="font-size:11px;"> ( Opcional )</span></label>

<select class="form-control col-md-8" name="horaatendimento" id="service">
<option value="">Escolher Período</option>
<option value="manha">Periodo da Manhã</option>
<option value="tarde">Periodo da Tarde</option>
<option value="noite">Periodo fim de tarde</option>
</select>
</div>




<button style="margin-left:25%; margin-left:25%; margin-top:60px;" class="col-md-6 center-block btn btn-primary btn-lg " type="submit">Solicitar</button>


		  <!-- .form-group -->	
</form>

<script>
function objetivo() {
  var produto = document.getElementById("opt-produto").checked;
  if (produto) {
    document.getElementById("produto").style.display = "block";
    document.getElementById("service").style.display = "none";
  } else if (service) {
    document.getElementById("produto").style.display = "none";
    document.getElementById("service").style.display = "block";
  } else{
    document.getElementById("produto").style.display = "none";
    document.getElementById("service").style.display = "none";
  }
}
</script>