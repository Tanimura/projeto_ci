<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of orcamento
 *
 * @author USER
 */
class orcamento extends CI_Controller{
    function __construct() {
        parent::__construct();
        #carrega aqui todos os metodos para que possamos usar em toda a classe
        $this->load->library('template');
        $this->load->model('orcamentos_model');
        $this->load->library('table');
        $this->load->library('grocery_crud');
    }
    function index($id=false){
        #carregou para criar a tabela sozinha
        $crud = new grocery_CRUD();
        $crud->set_table('orcamentos');
        $crud->columns('id_cliente','endereco');
        $crud->display_as('nome','Nome do Orcamento');
        $crud->set_subject('Cadastro de orcamentos');
        $crud->required_fields('endereco');
        ##$crud->set_field_upload('foto','assets/uploads');
        
        #$crud->unset_print(); #retira a Impressora 
        
        ##$crud->set_relation('id_empresa','empresas','id');
        
       
        #$crud->field_type('CPF','dropdown',array('100','10000','30000'));
        
        if($id >0){
        $crud->where('id_cliente', $id);
        }
        $data['crud'] = $crud->render();
        
        $this->template->load('layout','orcamentos/orcamentos_view',$data);
    }
    /**
    function empresa(){ # Funcao empresa
        $crud= new grocery_CRUD();
        $crud->set_table('empresas');
        
        $crud->columns('nome','cnpj');
        
        # $crud->add_action('Orcamentos','orcamentos/index'); #adiciona Ação
        
        $data['crud'] = $crud->render();
        #pode usar a mesma viu pq está trabalhando com a msm view no caso orcamentos_view
        $this->template->load('layout','orcamentos/orcamentos_view', $data);
    }*/
    function add(){
        $data = $this->input->post(); //tratamento do sqlinjection;
        
        if($this->orcamentos_model->insert_orcamento($data)){
            $data['mensagem'] = 'Salvo com sucesso!';
            $this->template->load('layout', 'messages', $data);            
        }else {
        $data['mensagem'] = 'falha ao salvar os dados!';
        $this->template->load('layout', 'messages', $data);
        }
    }
    function listar(){
        $result = $this->orcamentos_model->select_orcamentos();
        $data['table']= $this->table->generate($result);
        $this->template->load('layout','orcamentos/listar_view', $data);
      
    }
    function buscar(){
        $this->template->load('layout', 'orcamentos/buscar_view');
    }
    function exibir(){
        $id = $this->input->post('id');
        $data['result'] = $this->orcamentos_model->select_orcamento_id($id)->row();
        $this->template->load('layout','orcamentos/exibir_view',$data);
    }


}

?>
