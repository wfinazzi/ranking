<?php


class Ranking_model extends CI_Model {

public function get_ranking()
{
		$query = $this->db->get('ranking');
        $resultado = $query->result();		
        
        foreach($resultado as $key => $item){
            $resultado[$key]->TOTAL = $item->FACEBOOK + $item->INSTAGRAM + $item->TWITTER;
        }

        // print_r($resultado);
        // exit;

		return $resultado;

}





}