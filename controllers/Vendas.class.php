<?php require_once("./models/DB.class.php") ?>
<?php



	class Vendas extends DB{
	
/*=================================================isset======================================================*/

		static function isset_institutions(){
			
		


		}

/*=================================================selects======================================================*/

		static function select_all_vendas(){
			
			$n1 = self::getConn()->prepare('SELECT * FROM vendas WHERE cancelado <> 1 order by id desc ');
			$n1->execute(array()); 
			$d['dados'] = $n1->fetchAll();
			$d['num'] = $n1->rowCount();				
			return $d; 
			
		}
		
		
		static function select_vendas_id($id){
			
			$n1 = self::getConn()->prepare('SELECT * FROM vendas WHERE id=?');
			$n1->execute(array($id));
			$d = $n1->fetch();	
			$d['num'] = $n1->rowCount();	
			return $d;
			
		}

		static function select_users_id_perfil($id_perfil){
			
			$n1 = self::getConn()->prepare('SELECT * FROM users WHERE id_perfil=?');
			$n1->execute(array($id_perfil));
			$d['dados'] = $n1->fetchall();	
			$d['num'] = $n1->rowCount();	
			return $d;
			
		}
		
	
		
	
		
		
/*=================================================insert======================================================*/
		
		static function insert_venda($nome_proprietario, $endereco, $cep, $telefone, $tipo_venda, $valor, $valor_pp, $valor_comissao_imobiliaria, $documentacao, $observacao, $exclusividade,$cancelado){
			
			$n = self::getConn()->prepare('INSERT INTO `vendas` SET 
											nome_proprietario=?,
											endereco=?,
											cep=?, 
											telefone=?, 
											tipo_venda=?,
											valor=?, 
											valor_pp=?,
											valor_comissao_imobiliaria=?,		
											documentacao=?,		
											observacao=?,		
											exclusividade=?,
											cancelado=?,		
											data_cadastro="'.date("Y-m-d").'"		
										  ');											
			$n->execute(array($nome_proprietario, $endereco, $cep, $telefone, $tipo_venda, $valor, $valor_pp, $valor_comissao_imobiliaria, $documentacao, $observacao, $exclusividade,$cancelado));
			
			$id = self::getConn()->prepare('SELECT LAST_INSERT_ID() as id_last_insert');	
			$id->execute(array());
			$r = $id->fetch();
			return $r;
			
		}
		
		
		
/*=================================================update======================================================*/
		
		static function update_venda($nome_proprietario, $endereco, $cep, $telefone, $tipo_venda, $valor, $valor_pp, $valor_comissao_imobiliaria, $documentacao, $observacao, $exclusividade,$id){
					$n = self::getConn()->prepare('
													UPDATE  `vendas` SET 
														nome_proprietario=?,
														endereco=?,
														cep=?, 
														telefone=?,
														tipo_venda=?, 
														valor=?, 
														valor_pp=?,
														valor_comissao_imobiliaria=?,		
														documentacao=?,		
														observacao=?,		
														exclusividade=?	
													WHERE  `id` =? ');
											
					$n->execute(array($nome_proprietario, $endereco, $cep, $telefone, $tipo_venda, $valor, $valor_pp, $valor_comissao_imobiliaria, $documentacao, $observacao, $exclusividade,$id));
		}
	

	
/*=================================================delete======================================================*/		
		
		static function delete_venda($id){
				$n1 = self::getConn()->prepare('DELETE FROM `vendas` WHERE id=?');		
				$n1->execute(array($id));	
		}

/*=================================================Insert participantes======================================================*/


static function insert_participantes( $id_usuario,$pp,$id_perfil,$id_venda,$previsao_pagamento){
			
	$n = self::getConn()->prepare('INSERT INTO `participantes` SET 
								   
									id_usuario=?,
									pp=?,
									id_perfil=?,
									id_venda=?,
									previsao_pagamento=?
											
								  ');											
	$n->execute(array($id_usuario,$pp,$id_perfil,$id_venda,$previsao_pagamento));
	
	$id = self::getConn()->prepare('SELECT LAST_INSERT_ID() as id_last_insert');	
	$id->execute(array());
	$r = $id->fetch();
	return $r;
	
}




/*=================================================select configurações======================================================*/


static function select_conf(){
			
	$n1 = self::getConn()->prepare('SELECT * FROM configuracoes');
	$n1->execute(array());
	$d = $n1->fetchall();		
	return $d;
	
}

/*=================================================select participantes======================================================*/

static function select_paticipantes($id_venda,$id_usuario){
			
	$n1 = self::getConn()->prepare('SELECT * FROM participantes WHERE id_venda=? AND id_usuario=?');
	$n1->execute(array($id_venda,$id_usuario));
	$d['dados'] = $n1->fetchAll();
	$d = $n1->fetch();	
	$d['num'] = $n1->rowCount();	
	return $d;
	
}

static function select_vendas_for_participantes($id){
			
	$n1 = self::getConn()->prepare('SELECT * FROM vendas WHERE id=?');
	$n1->execute(array($id));
	$d['dados'] = $n1->fetchAll();	
	$d['num'] = $n1->rowCount();	
	return $d;
	
}

static function select_pp($id_venda,$id_usuario){
			
	$n1 = self::getConn()->prepare('SELECT * FROM participantes WHERE id_venda=? AND id_usuario=? ');
	$n1->execute(array($id_venda,$id_usuario));
	$d = $n1->fetch();	
	$d['num'] = $n1->rowCount();	
	return $d;
	
}



/*=================================================Delete participantes======================================================*/
static function delete_participantes($id_venda){
	$n1 = self::getConn()->prepare('DELETE FROM `participantes` WHERE id_venda=?');		
	$n1->execute(array($id_venda));	
}
		
		
		


/*=================================================cancelar venda======================================================*/
static function update_cancelvenda($cancelado,$motivo_cancelamento,$id){
	$n = self::getConn()->prepare('
													UPDATE  `vendas` SET 
														cancelado=?,	
														motivo_cancelamento=?	
													WHERE  `id` =? ');
											
					$n->execute(array($cancelado,$motivo_cancelamento,$id));

}

	}


?>