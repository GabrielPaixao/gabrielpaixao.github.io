<?php

require_once('./models/DB.class.php');

class vales extends DB
{

    /*=================================================insert======================================================*/

    static function insert_vales($id_usuario, $tipo, $valor)
    {

        $n = self::getConn()->prepare('INSERT INTO `vales` SET 
												
											id_usuario=?,
											 tipo=?,
                                             valor=?,		
											data ="' . date("Y-m-d") . '"		
										  ');
        $n->execute(array($id_usuario, $tipo, $valor));

        $id = self::getConn()->prepare('SELECT LAST_INSERT_ID() as id_last_insert');
        $id->execute(array());
        $r = $id->fetch();
        return $r;
    }

    /*=================================================select======================================================*/
    static function select_users_idPerfil($id_perfil){
			
        $n1 = self::getConn()->prepare('SELECT * FROM users WHERE id_perfil <> 1');
        $n1->execute(array($id_perfil));
        $d['dados'] = $n1->fetchAll();	
        $d['num'] = $n1->rowCount();	
        return $d;
        
    }

    static function select_all_vales(){
			
        $n1 = self::getConn()->prepare('SELECT * FROM vales');
        $n1->execute(array()); 
        $d['dados'] = $n1->fetchAll();
        $d['num'] = $n1->rowCount();				
        return $d; 
        
    }

    static function select_soma(){
			
        $n1 = self::getConn()->prepare('SELECT SUM(valor) AS total FROM vales'); 
        $n1->execute();
        $d = $n1->fetch();
        $total = $d['total'];
        return $total; 
         
        
    }

    
}
