<?php 

session_start();
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];


    include_once 'conexao.php';

    $sql = "select nome, email, senha from usuarios where email = '".$email."' and senha = '".$senha."';";
        
    $result = mysqli_query($con, $sql);

    $registro = mysqli_num_rows($result);

    $row = mysqli_fetch_array ($result);

    if($registro > 0){
        
         $_SESSION["email"] = $email;
         $_SESSION["senha"] = $senha;
    header("Location:administrador.php");
        
    }

    else{
        echo "<script>alert('Login ou senha inválidos!'), window.open('login.php','_self')</script>";
    }

    
?>