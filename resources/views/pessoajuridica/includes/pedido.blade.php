<div class="panel panel-danger">
  <div class="panel-heading"> Orçamento via formulario</div>
    
    <table  class="table table-striped">
   
 <tr>
  <td>Seguimento</td>
  <td>Produto</td>
  <td>Marca</td>
  <td>Modelo</td>
  <td>Quantidade</td>
  <td>Obs</td>
  <td></td>
</tr>

<tr class="divprodutos">
  <td><select class="form-control" id="sel1" style="width:11em">
    <option value="agronegocio">Agronegócio</option>
    <option value="">Alimentos</option>
    <option value="">Informática</option>
    <option value="">Telefonia</option>
    <option value="">Vestuário e Acessórios</option>
    <option value="">Maquinas</option>
    <option value="">Outros</option>

  </select></td>
	<td>

  <input type="text" class="form-control" placeholder="Ex.: Notebook , Ramal , Bolsas"  style='width:15em'  id="inputSuccess1">
	</td>
	<td>
  <input type="text" class="form-control" placeholder="Ex.: Intel , Amd , IntelBras , oclay" style='width:6em'  id="inputSuccess1" aria-describedby="helpBlock2">
</td>
	<td><input type="text" class="form-control"  placeholder="" style='width:7em' id="inputSuccess1" aria-describedby="helpBlock2"></td>
	<td><input type="number" class="form-control"  style='width:5.5em' maxlength='4' max="4" style="" id="inputSuccess1"></td>
	<td><input type="text" class="form-control" placeholder="" style='width:18em' id="inputSuccess1"></td>
	
	<td>
	<button type="button" class="btn btn-success btn-sm contatoBtMais"> + </button> 
	</td>
		<td>
	<button type="button" class="btn btn-danger btn-sm remove"> - </button> 
	</td>
</tr> 
<hr>
 <tr>
   <td></td>
   <td><button type="button" class="btn btn-danger btn-lg "> Solicitar Orçamento </button></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
  

</table>

  
</div>


<script>
	 $('.contatoBtMais').click(function (event) {
            //localiza a div para clonar
            var divClonar   = $('.divprodutos').first();
            
            //localiza a div á qual a div clonada será anexada
            var appendTo    = $('.divprodutos').last();
            
            //clona a div
            var divClonada = divClonar.clone(true);
            
            //anexa a div clonada
            divClonada.insertAfter( appendTo );
            
            event.preventDefault();
            console.log('click clone');
        });
        
        $('.remove').click(function (event) {
            var divRemove = $(this).closest('.divprodutos');

            divRemove.remove();
            event.preventDefault();
            console.log('click clone');
        });
</script>