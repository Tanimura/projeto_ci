<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ferramentas
 *
 * @author 2100018-2
 */
class Ferramentas extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->library('template');
    }
    function index(){
        $this->template->load('layout', 'ferramentas_view');
    }
    //put your code here
}

?>
