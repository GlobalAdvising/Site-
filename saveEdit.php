<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $txt = $_POST['txt'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $CPF = $_POST['CPF'];
        $number = $_POST['number'];
        $date = $_POST['date'];
        $radios = $_POST['radios'];
        
        $sqlInsert = "UPDATE usuarios 
        SET txt='$txt',email='$email',senha='$senha',CPF='$CPF',number='$number',date='$date',radios='$radios'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: users-profile.php');

?>