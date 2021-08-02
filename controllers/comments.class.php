

<?php 
class Comments extends DB{

    /*=================================================insert======================================================*/

    static function insert_coment($id_vendas,$comentario){
			
        $n = self::getConn()->prepare('INSERT INTO `comentarios` SET
                                        id_vendas=?, 
                                        comentario=?,	
                                        data_comentario="'.date("Y-m-d").'"		
                                      ');											
        $n->execute(array($id_vendas,$comentario));
        
        $id = self::getConn()->prepare('SELECT LAST_INSERT_ID() as id_last_insert');	
        $id->execute(array());
        $r = $id->fetch();
        return $r;
    
}

/*=================================================select======================================================*/
static function select_comentarios(){
			
    $n1 = self::getConn()->prepare('SELECT * FROM comentarios ');
    $n1->execute(array()); 
    $d['dados'] = $n1->fetchAll();	
    return $d; 
    
}

/*=================================================delete======================================================*/


static function delete_comentario($id){
    $n1 = self::getConn()->prepare('DELETE FROM `comentarios` WHERE id=?');		
    $n1->execute(array($id));	
}



}

?>