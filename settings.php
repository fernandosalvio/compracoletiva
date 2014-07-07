<?php


define('DB_HOST',"localhost"); 
define('DB_USER',"user");
define('DB_PASS',"pass");
define('DB_NAME',"bd_name");


define('MAIL_HOST',"smtp_host");
define('MAIL_PORT',"80");
define('MAIL_SECURE',"");
define('MAIL_USER',"user");
define('MAIL_PASS',"pass");
define('MAIL_FROM',"email_from@email.com");
define('MAIL_SENDER',"email_sender@email.com");
define('MAIL_FROM_NAME',"Comissão de Pedidos da Rede Equilibrium");

//Cópia oculta
define('MAIL_COPY',"mail_copy@email.com");
define('MAIL_COPY_NAME',"Name_copy");

// configuração do salt para o hash
define('PASSWORD_SALT',"tempero"); 

define('NOME_SISTEMA',"Compra Coletiva da Rede Equilibrium");

// Nome do grupo de consumo associado
define('NOME_GRUPO_CONSUMO',"Rede Equilibrium");
// URL do grupo de consumo associado
define('URL_GRUPO_CONSUMO',"http://equilibrium.org.br");


define('EMAIL_SUPORTE_SISTEMA',"email@suporte.com");  // em caso de detecção que o banco de dados está fora do ar, por exemplo, o sistema vai informar ao usuário que contacte neste endereço de email


// configuração para registro de visita no Google Analytics; deixar o valor de GA_ACCOUNT em branco caso não deseje que o registro de visita seja acionado nas páginas do sistema
define('GA_ACCOUNT',"");  // código informado pelo google analytics, algo como: UA-XXXXXX-X
define('GA_DOMAIN',"equilibrium.org");  // exemplo: redeecologicario.org





?>
 
