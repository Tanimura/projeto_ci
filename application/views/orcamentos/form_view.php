<?php
echo form_open('orcamentos/add');
echo form_label('Nome do orcamento').br();
echo form_input('nome').br();
echo form_label('CPF').br();
echo form_input('CPF').br();
echo form_label('endereco').br();
echo form_textarea('endereco').br();
echo form_submit('','Enviar');
echo form_close();
?>
