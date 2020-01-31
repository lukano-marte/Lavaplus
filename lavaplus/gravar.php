<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <?php include_once 'funcoes.php' ?>
</head>
    <body class="container">

       
        <?php
        
         include_once 'conexao.php';
        
        
        $nomecompleto         = trataNome($_POST["nomecompleto"]);
        $telefone             = $_POST["telefone"];
        $cpf                  = $_POST["cpf"];
        $cep                  = $_POST["cep"];
        $endereco             = $_POST["endereco"];
        $logradouro           = $_POST["logradouro"];
        $quantidade           = $_POST["quantidade"];
        $pagamento            = $_POST["pagamento"];
        $observacao           = $_POST["observacao"];
       
        
        $sql = "INSERT INTO agendamento VALUES(null, '{$nomecompleto}','{$telefone}','{$cpf}','{$cep}','{$endereco}','{$logradouro}','{$quantidade}','{$pagamento}','{$observacao}')";
    
        $verificadosCamposVazios = $nomecompleto != "" && $telefone != "" && $cpf != "" && $cep != "" && $endereco != "" && $logradouro != "" && $quantidade != "" && $pagamento != "" && $observacao != "";
    
    
        
    if($verificadosCamposVazios) {   
        if(mysqli_query($con, $sql)){
            
           echo  "<script>alert('Seu pedido foi realizado com sucesso, em breve entraremos em contato!'), window.open('index.php','_self')</script>";
            //echo "<p class='alert alert-success'>Gravado com sucesso!</p>";
        }
   
        else{
            echo "<p class='alert alert-danger'>Erro ao gravar!</p>";
        } 
    }
        
    else { echo "Preencher todos os campos!"; 
    }
        
        
        
        ?>
     
    </body>
</html>



