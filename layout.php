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
                <li><?php echo anchor('', 'Add Produtos')?></li>
                <li><?php echo anchor('', 'Listar Produtos')?></li>
                <li class='last'><?php echo anchor('', 'Ferramentas')?></li>
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
