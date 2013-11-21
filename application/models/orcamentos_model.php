<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of orcamentos_model
 *
 * @author USER
 */
class orcamentos_model extends CI_Model{
    function insert_orcamento($data){
        if($this->db->insert('orcamentos',$data)){
            return true;
        }else {
            return false;
        }
    }
    function select_orcamentos(){
        return $this->db->get('orcamentos');
        /*
         * exibe com comandos sql
        $this->db->select('*');
        $this->db->from('orcamentos');
        return $this->db->get();
        
         */
    }
    function select_orcamento_id($id){
        $this->db->where('id',$id);
        return $this->db->get('orcamentos');
    }
}
?>

