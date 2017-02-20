              
                
                    <div class="panel-heading">
                        Compose New Message 
                    </div>
<br>

<form role="form" method="POST" action="{{ url('/pedido') }}">
                        {{ csrf_field() }}

	<div class="form-group col-md-12">
		<label for="comment">O que você procura:</label><br>
		<label class="radio-inline">
		  <input type="radio" name="produtoservice" id="inlineRadio1" value="produto"> Produtos para comprar
		</label>
		<label class="radio-inline">
		  <input type="radio" name="produtoservice" id="inlineRadio2" value="prestador"> Prestadores de Serviço
		</label>
	</div>


<br>

	<div class="form-group col-md-11">
		<label  for="comment">Produto / Serviço:</label>
		<input type="text" class="form-control " placeholder="Tecnico de Informática , Motor de geladeira e etc.." >
		<span>Titulo que descreve sua necessidade. Ex.:Quero Notebook AMD .</span>
	</div>


<br>

	<div class="form-group col-md-11" >
		<label for="comment">Descreva sua necessidade: </label>
		<textarea name="descritivo" class="form-control" placeholder="Em poucas Palavras : Ex.: Minha necessidade é um Técnico de informática especializado em Notebook " rows="3" style="width: 100%;"></textarea>
	</div>

<br>
<div class="col-md-11"> 
	<div class="form-group">
		<label>Categoria que melhor descreve sua necessidade:</label>
			<select class="form-control" name="categoria" style="width: 100%";>
			  <option>Alimentação e Suprimentos</option>
			  <option>Casa e Decoração</option>
			  <option>Informatica e Telefonia</option>
			  <option>Vestuário, Calçados e Acessórios</option>
			  <option>Jóias e Bijuterias</option>
			</select>
	</div>
</div> 
<div class="col-md-12"> 
<br><br>
<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span>&nbsp; Solicitar Orçamento</button>
</div>
<br><br>
</form>
	 
