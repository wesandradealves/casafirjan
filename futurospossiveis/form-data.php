<?php
    $file_local = 'arquivo.json';

    if(file_exists($file_local)) {
        $current_data = file_get_contents($file_local);
        $array_data = json_decode($current_data, true);
    }

    $dados = array(
        'Nome Completo' => $_POST["NomeCompleto"],
        'CPF' => $_POST["CPF"],
        'Email' => $_POST["Email"],
        'Telefone' => $_POST["Telefone"],
        'Data' =>  date('d-m-Y', time()),
        'Hora' =>  date('H:i:s')
    );

    $array_data[] = $dados;
    $escreve = json_encode($array_data,JSON_PRETTY_PRINT);

    file_put_contents($file_local,$escreve);

    //echo('lalalala');

?>