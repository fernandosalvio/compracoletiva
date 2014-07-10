<?php  
  require  "common.inc.php"; 
  verifica_seguranca($_SESSION[PAP_RESP_PEDIDO]);
  top();
?>

<?php

		$action = request_get("action",-1);
		if($action==-1) redireciona(PAGINAPRINCIPAL);
		
		$cate_id =  request_get("cate_id","");


		if ( $action == ACAO_INCLUIR) // exibe formulário vazio para inserir novo registro
		{
			$cate_nome = "";
			$cate_id = "";
		
		}
		else if ($action == ACAO_SALVAR) // salvar formulário preenchido
		{
 			 $campos = array('cate_nome');  			
			 $sql=prepara_sql_atualizacao("cate_id",$campos,"categorias");
     		 $res = executa_sql($sql);
			 if($res) 
			 {
				$action=ACAO_EXIBIR_LEITURA; //volta para modo visualização somente leitura
				adiciona_mensagem_status(MSG_TIPO_SUCESSO,"Informação da categoria " . $_REQUEST["cate_nome"] . " salvas com sucesso.");				
				escreve_mensagem_status();
			 }		
			 
 			 if($cate_id=="") $cate_id = id_inserido();	
		}
		
		
		if ($action == ACAO_EXIBIR_LEITURA || $action == ACAO_EXIBIR_EDICAO)  // exibir para visualização, ou exibir para edição
		{
		  $sql = "SELECT * FROM categorias WHERE cate_id=" . prep_para_bd($cate_id) ;
 		  $res = executa_sql($sql);
  	      if ($row = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
		  {		  
	  
			$cate_nome = $row["cate_nome"];
		   }
		}		

?>

<?php 
 if($action==ACAO_EXIBIR_LEITURA)  //visualização somente leitura
 {
 ?>	  
<div class="panel panel-default">
  <div class="panel-heading">
     <strong>Informações da Categoria</strong>
  </div>
 <div class="panel-body"> 

<table class="table-condensed table-info-cadastro">
		<tbody>
    		<tr>
				  <th>Nome:</th> <td><?php echo($cate_nome); ?></td>
			  </tr>	                                     
    </tbody>
    
</table>
  </div>  
  
        <div class="panel-footer">
      		<div class="col-sm-offset-2">
         	 	<a class="btn btn-primary" href="categoria.php?action=<?php echo(ACAO_EXIBIR_EDICAO); ?>&cate_id=<?php echo($cate_id); ?>"><i class="glyphicon glyphicon-edit glyphicon-white"></i> editar</a>
         	&nbsp;&nbsp;
         		<a class="btn btn-default" href="categorias.php"><i class="glyphicon glyphicon-list"></i> listar categorias</a>
             </div>
       </div>
       
  </div>       
    
   
	
<?php 

	
 }
 else
 {

?>
<form class="form-horizontal" action="categoria.php" method="post"  role="form">
   <fieldset>
    
    <div class="panel panel-default">
      <div class="panel-heading">
         <strong>Atualização de Informações de Categoria</strong>
      </div>
      
 	 <div class="panel-body">         
          <input type="hidden" name="cate_id" value="<?php echo($cate_id); ?>" />
          <input type="hidden" name="action" value="<?php echo(ACAO_SALVAR); ?>" />  
            <div class="form-group">
               <label class="control-label col-sm-2" for="cate_nome">Nome </label>
                 <div class="col-sm-6">
                   <input type="text" name="cate_nome" required="required" value="<?php echo($cate_nome); ?>" placeholder="Nome" class="form-control"/>
                  </div>
            </div>
            
            
	</div>  <!-- div panel-body --> 

   		<div class="panel-footer">          
		  <div class="form-group">
	          <div class="col-sm-offset-2">
                   <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok glyphicon-white"></i> salvar alterações</button>
                   &nbsp;&nbsp;
                   <button class="btn btn-default" type="button" onclick="javascript:location.href='categorias.php'"><i class="glyphicon glyphicon-off"></i> descartar alterações</button>
              </div>
          </div>   
        </div>   <!-- div panel-footer -->        
     
  </div>  <!-- div panel --> 
            
          
      </fieldset> 
    </form>
    
    <?php  
   }

   footer();
?>
