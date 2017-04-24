<?php
include_once("conexao.php");

$user = $_POST['user'];
$psw = $_POST['pass'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];

    $nome_usuario = $_POST['txt_nome_usuario'];
    $email_usuario = $_POST['txt_email_usuario'];
    //echo "$nome_usuario - $email_usuario";
    
    $result_usuario = "INSERT INTO usuarios(user, pass, email, empresa) VALUES ('{$user}',{$psw}',{$email}',{$empresa}')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
                    <script type="text/javascript">
                        alert("Usuario cadastrado com Sucesso.");
                    </script>
                ";    
            }else{
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
                    <script type="text/javascript">
                        alert("O Usuario não foi cadastrado com Sucesso.");
                    </script>
                ";    
            }
