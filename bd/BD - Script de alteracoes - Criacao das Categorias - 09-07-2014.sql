/*
	Data: 09/07/2014
	Criador: Fernando Salvio
	Sistema: compracoletiva Equilibrium. Derivado de redeecologica/pedidos. (Git-hub)
	Objetivo: Criar tabela categorias, campo correspondente na tabela produtos, 
	inserir categorias iniciais e criar o tipo Geral.
*/

CREATE TABLE `categorias` (
  `cate_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `cate_nome`  varchar(150) DEFAULT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE produtos ADD COLUMN prod_cate mediumint(6) after prod_forn;

INSERT INTO `pedidos`.`produtotipos` (`prodt_id`, `prodt_nome`, `prodt_mutirao`) VALUES ('3', 'Geral', '1');

INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('1', 'Alimentícios');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('2', 'Açúcares');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('3', 'Bebidas');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('4', 'Diversos');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('5', 'Enlatados e Conservas');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('6', 'Farinhas');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('7', 'Grãos');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('8', 'Higiene Pessoal');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('9', 'Laticínios');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('10', 'Limpeza');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('11', 'Massas');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('12', 'Matinais');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('13', 'Nozes e Castanhas');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('14', 'Óleos');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('15', 'Temperos');
INSERT INTO `categorias` (`cate_id`, `cate_nome`) VALUES ('16', 'Soja e Derivados');



/*
Alimentação
Laticínios
Higiene Pessoal
Limpeza

Fósforo(?)


Coloquei esses como diversos junto com vassoura, rodo, flanela, balde, luva e etc.

Gostaria de especificar mais os alimentos tb, acho uma boa. Além desses, pode ser tb:

Açúcares
Bebidas
Diversos
Enlatados e Conservas
Farinhas
Grãos
Higiene Pessoal
Laticínios
Limpeza
Massas
Matinais
Nozes e Castanhas
Óleos
Temperos
Soja e Derivados

*/
