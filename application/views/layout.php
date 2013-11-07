<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php echo link_tag('assets/css/style.css')?>
        <title>Projeto CI</title>
    </head>
    <body>
        <div id="header">
            
        </div>
        <div id="menu">
            <ul>
    
                <li class='active'><?php echo anchor('home', 'Home')?></li>
                <li><?php echo anchor('clientes', 'Clientes')?></li>
                <li><?php echo anchor('clientes/categoria', 'Categorias')?></li>
                <li><?php echo anchor('clientes', 'Add Clientes')?></li>
                <li><?php echo anchor('clientes/listar', 'Listar Clientes')?></li>
                <li><?php echo anchor('clientes/buscar', 'Buscar Clientes')?></li>
                <li class='last'><?php echo anchor('ferramentas', 'Ferramentas')?></li>
             </ul>
        </div>
        <div id="contents">
            <?php
            echo $contents;
            ?>
        </div>
        <div id="footer">
            Fatec - 2013
        </div>
    </body>
</html>
