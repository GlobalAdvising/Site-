
<?php

    include_once('config.php');

    $dados = array();

    $sql = "SELECT * FROM usuarios";

    $result = mysqli_query($conexao, $sql);
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or txt LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
    if(mysqli_num_rows($result)>0){
        while($user = mysqli_fetch_array($result)){
            $dados[] = array(
                'id' =>$user['id'],
                'txt' =>$user['txt'],
                'email' =>$user['email'],
                'senha' =>$user['senha'],
                'CPF' =>$user['CPF'],
                'number' =>$user['number'],
                'date' =>$user['date'],
                'radios' =>$user['radios']
            );
        }

    }else{
        echo 'Nenhum usuario';
        exit;
    }
    echo json_encode($dados);




    

?>


           