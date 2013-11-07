<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author 2100018-2
 */
class home extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->library('template');  // carrega o template;
    }
function index(){
    $this->template->load('layout', 'home_view'); //junta os conteudos para exibir junto;
}

}
?>
