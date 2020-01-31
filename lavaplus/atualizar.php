    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
    <body class="container">

        <?php
        
        $id                 = $_POST["id"];
        $nomecompleto       = $_POST["nomecompleto"];
        $telefone           = $_POST["telefone"];
        $cpf                = $_POST["cpf"];
        $endereco           = $_POST["endereco"];
        $logradouro         = $_POST["logradouro"];
        $quantidade         = $_POST["quantidade"];
        $pagamento          = $_POST["pagamento"];
        $observacao         = $_POST["observacao"];
        
        
        include_once 'conexao.php';
        $sql = "UPDATE agendamento SET nomecompleto='{$nomecompleto}', 
        telefone='{$telefone}', cpf='{$cpf}',endereco='{$endereco}',logradouro='{$logradouro}'
        ,quantidade='{$quantidade}',pagamento ='{$pagamento}',observacao='{$observacao}' WHERE id=".$id;
        
        if(mysqli_query($con, $sql)){
             //header('location: admnistrador.php');
            
             echo  "<script>alert('Editado com sucesso!'), window.open('consultarAgendamento.php','_self')</script>";
        }else{
            echo "<p class='alert alert-danger'>Erro ao atualizar!</p>";
        } ?>
        <br>
        <a href="administrador.php">Página Inicial</a>
    </body>
</html>