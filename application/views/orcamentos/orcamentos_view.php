<?php
foreach ($crud->css_files as $css){
    echo link_tag($css);
}
foreach ($crud->js_files as $js) {
    echo "<script src='$js'></script>";
    }
echo $crud->output;

?>
