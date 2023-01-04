<?php

        include 'conexao.php';

        $usuario = $_POST['txt_nome'];
        $email = $_POST['txt_email'];
        $msg = $_POST['txt_msg'];

        if(empty($usuario) || empty($email) || empty($msg)){
            header('Location: index.php');
            exit();
        }

        $sql = mysqli_query($conecta, "select * from tb_chat where nome = '$usuario'"); //O $conecta é a variável do conexao.php
        $sql2 = $sql->num_rows; //o $sql->num_rows é para ler todas as linha de cadastro do tb_cadastrar, para ver se tem algum dado igual, caso tenha não cadastrará
        
        $sql = mysqli_query($conecta, "insert into tb_chat (nome, email, mensagem)values('$usuario','$email','$msg')"); //O $conecta é a variável do conexao.php
        header('Location: index.php');  
            
?>