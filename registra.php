<?php
include_once("conexao.php");

$user = $_POST['user'];
$psw = $_POST['pass'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];


    //echo "$nome_usuario - $email_usuario";
    
    $result_usuario = "INSERT INTO usuarios(user, pass, email, empresa) VALUES ('{$user}',{$psw}',{$email}',{$empresa}')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    workou
                ";    
            }else{
                echo "
                    Nao workou	
                ";    
            }
