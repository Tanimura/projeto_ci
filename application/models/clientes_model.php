<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clientes_model
 *
 * @author 2100018-2
 */
class Clientes_model extends CI_Model{
    function insert_cliente($data){
        if($this->db->insert('clientes',$data)){
            return true;
        }else {
            return false;
        }
    }
    function select_clientes(){
        return $this->db->get('clientes');
        /*
         * exibe com comandos sql
        $this->db->select('*');
        $this->db->from('clientes');
        return $this->db->get();
        
         */
    }
    function select_cliente_id($id){
        $this->db->where('id',$id);
        return $this->db->get('clientes');
    }
}
?>
