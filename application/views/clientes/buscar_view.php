<?php
echo form_open('clientes/exibir');
echo form_label('Digite o codigo');
echo form_input('id');
echo form_submit('','Enviar');
echo form_close();
?>
