<?php 
class configuracoes extends DB{

    /*=================================================insert======================================================*/

    static function update_conf($comissao,$id){
        $n = self::getConn()->prepare('
                                        UPDATE  `configuracoes` SET 
                                            		
                                            comissao=?	
                                        WHERE  `id` =? ');
                                
        $n->execute(array($comissao,$id));
}

/*=================================================select======================================================*/
static function select_conf($id){
			
    $n1 = self::getConn()->prepare('SELECT * FROM configuracoes WHERE id=? ');
    $n1->execute(array($id)); 
    $d['dados'] = $n1->fetchAll();	
    return $d; 
    
}
}
