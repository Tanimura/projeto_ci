<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clientes
 *
 * @author 2100018-2
 */
class Clientes extends CI_Controller{
    function __construct() {
        parent::__construct();
        #carrega aqui todos os metodos para que possamos usar em toda a classe
        $this->load->library('template');
        $this->load->model('clientes_model');
        $this->load->library('table');
        $this->load->library('grocery_crud');
    }
    function index($id=false){
        #carregou para criar a tabela sozinha
        $crud = new grocery_CRUD();
        $crud->set_table('clientes');
        $crud->columns('nome','CPF','foto','data_inclusao','endereco');
        $crud->display_as('nome','Nome do Cliente');
        $crud->set_subject('Cadastro de clientes');
        $crud->required_fields('nome','CPF');
        $crud->set_field_upload('foto','assets/uploads');
        $crud->unset_print();
        
        $crud->set_relation('id_categoria','categorias','id');
        
       
        #$crud->field_type('CPF','dropdown',array('100','10000','30000'));
        
        if($id >0){
        $crud->where('id_categoria', $id);
        }
        $data['crud'] = $crud->render();
        
        $this->template->load('layout','clientes/clientes_view',$data);
    }
    function categoria(){
        $crud= new grocery_CRUD();
        $crud->set_table('categorias');
        
        $crud->columns('nome','endereco');
        
        $crud->add_action('Clientes','clientes/index');
        
        $data['crud'] = $crud->render();
        #pode usar a mesma viu pq está trabalhando com a msm view no caso clientes_view
        $this->template->load('layout','clientes/clientes_view', $data);
    }
    function add(){
        $data = $this->input->post(); //tratamento do sqlinjection;
        
        if($this->clientes_model->insert_cliente($data)){
            $data['mensagem'] = 'Salvo com sucesso!';
            $this->template->load('layout', 'messages', $data);            
        }else {
        $data['mensagem'] = 'falha ao salvar os dados!';
        $this->template->load('layout', 'messages', $data);
        }
    }
    function listar(){
        $result = $this->clientes_model->select_clientes();
        $data['table']= $this->table->generate($result);
        $this->template->load('layout','clientes/listar_view', $data);
      
    }
    function buscar(){
        $this->template->load('layout', 'clientes/buscar_view');
    }
    function exibir(){
        $id = $this->input->post('id');
        $data['result'] = $this->clientes_model->select_cliente_id($id)->row();
        $this->template->load('layout','clientes/exibir_view',$data);
    }
}

?>
