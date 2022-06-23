<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $evento = $_POST['evento'];
        $participantes = $_POST['participantes'];
        $tipo = $_POST['tipo'];
        $categoria = $_POST['categoria'];
        $classe = $_POST['classe'];
        $address = $_POST['address'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $state = $_POST['state'];

        
        $sqlInsert = "UPDATE eventos 
        SET evento='$evento',participantes='$participantes',tipo='$tipo',categoria='$categoria',calsse='$classe',address='$address',address2='$address2',city='$city'state='$state'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: forms-layouts.php');

?>