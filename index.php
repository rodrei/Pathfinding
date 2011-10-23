<?php
    $file_path = 'nodes.json';
    $file = fopen($file_path, 'r');
    if(!$file) throw new Exceptio('Cant open file ' . $file_path);
    
    $json_str = fread($file, 1024);
    $json_arr = json_decode($json_str);
    
    var_dump($json_arr);


?>
