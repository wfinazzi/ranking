<?php


class Ranking_model extends CI_Model {

public function get_ranking($id)
{         

		$query = $this->db->get_where('ranking', array('CLUBE' => $id));
        $resultado = $query->row();	
        //print_r($id);
        $resultado->TOTAL = $resultado->FACEBOOK + $resultado->INSTAGRAM + $resultado->TWITTER + $resultado->YOUTUBE;           

		return $resultado;

}


public function get_clubes($divisao){     
   
    if($divisao != 0){
        $filtro = " WHERE DIVISAO = ".$divisao;        
    }      
    
    $query = $this->db->query('SELECT * FROM CLUBES'.$filtro);

    $this->db->last_query();
    $resultado = $query->result();

    foreach($resultado as $key => $item){
       
        $resultado[$key]->RANKING = $this->get_ranking($item->ID);
        
    }

    return $resultado;   

}





}