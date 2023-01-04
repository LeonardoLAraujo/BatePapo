<?php
    include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT</title>
    <link rel="stylesheet" href="css/chat.css">
</head>
<body>
    
    <div>
        <h1 id="titulo">Bate Papo</h1>
        <div id="chat">
            <?php
                $query = "SELECT * FROM tb_chat";
                $result = mysqli_query($conecta, $query);
                while($row = mysqli_fetch_array($result)){
                    echo '
                        <h1>'.$row['nome'].'</h1>
                        <p>'.$row['mensagem'].'</p>
                    ';
                };
            ?>        
        </div>

        <form method="POST" id="formulario" name="frm_chat">
            <div id="inputs">
                <input type="text" name="txt_nome" id="nome" placeholder="Nome do Usuário" required>
                <input type="email" name="txt_email" id="email" placeholder="E-mail do Usuário" required>
            </div>
            <div id="msg">
                <textarea name="txt_msg" id="mensagem" cols="100" rows="10" placeholder="Digite sua Mensagem" required></textarea>
            </div>
            <button type="submit" id="btn" onClick="document.frm_chat.action='enviarMensagem.php'">Enviar Mensagem</button>
        </form>
    </div>

</body>
</html>