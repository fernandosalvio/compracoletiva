<?php  
  require  "common.inc.php"; 
  verifica_seguranca($_SESSION[PAP_RESP_PEDIDO]);
  top();
?>

<div class="panel panel-default">
  <div class="panel-heading">
     <strong>Lista de Categorias</strong>
       <span class="pull-right">
		<a href="categoria.php?action=<?php echo(ACAO_INCLUIR);?>" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-plus"></i> adicionar nova</a>
	</span>
  </div>
  <div class="panel-body">


  </div>
        
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Produtos</th>   
			</tr>
		</thead>
		<tbody>
				<?php
					
					$sql = "SELECT cate_id, cate_nome, ";
					$sql.= "COUNT( produtos.prod_cate ) AS cate_qtde_produtos ";
					$sql.= "FROM categorias LEFT JOIN produtos ON cate_id = prod_cate  ";
					$sql.= "AND prod_ini_validade <= DATE_ADD(NOW(),INTERVAL 4 HOUR) AND prod_fim_validade >= DATE_ADD(NOW(),INTERVAL 4 HOUR) ";
					$sql.= "GROUP BY cate_id ";
					$sql.= "ORDER BY cate_nome ";

					$contador=0;
					$res = executa_sql($sql);
				    if($res)
					{
					 while ($row = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
				     {
						
						
				?>				 
				  <tr>
                  	 <td><?php echo(++$contador); ?></td>
					 <td><a href="categoria.php?action=0&amp;cate_id=<?php echo($row['cate_id']);?>"><?php echo($row['cate_nome']);?></a></td>                
					 <td>&nbsp;<?php echo($row['cate_qtde_produtos']);?> &nbsp; <a class="btn btn-default btn-xs" href="produtos.php?prod_cate=<?php echo($row['cate_id']);?>"><i class="glyphicon glyphicon-search"></i> consultar</a></td>                     
				  </tr>
				<?php 
				     }
				   }
				?>
		</tbody>
	</table>
    
  </div>  

       <span class="pull-right">
		<a href="categoria.php?action=<?php echo(ACAO_INCLUIR);?>" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> adicionar nova</a>
	</span>


<?php 
 
	footer();
?>