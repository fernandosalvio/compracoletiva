compracoletiva
==============

Versão customizada do redeecologica/pedidos para uso da Compra Coletiva da Cooperativa Equilibrium

Algumas alterações que foram necessárias para o nosso ambiente:

1 - Arquivos que tiveram a funçao de data alterada para funcionar no servidor Godaddy, com 4 horas a
menos que nosso horário. 

DATE_ADD(NOW(),INTERVAL 4 HOUR) 

chamada.php 
common.inc.php 
distribuicao.php 
estoque.php 
meuspedidos.php 
pedido.php 
produto.php 
produtores.php 
produtos.php 
recebimento.php 
rel_produtos_ao_longo_do_ano.php


2 - Alterado taxa de contribuição para 20% ou 30% já incluída no valor do produto.

common.inc.php
rel_pedido_por_cestante_nucleo.php 
pedido.php 

Alteração para não cobrar taxa, já que esta será incluída no valor do item para o associado em 20% e
para não associado 30%. No final apenas informa a % destinada ao EES. 

3 - Inclusão de cópia oculta para todos os emails enviados pelo sistema para maior controle.

settings.php 

Definição de duas variáveis para guardar os dados da cópia oculta. 
//Cópia oculta 
define('MAIL_COPY',""); 
define('MAIL_COPY_NAME',""); 

common.inc.php 
alteração na função envia_email() para incluir a cópia oculta.
