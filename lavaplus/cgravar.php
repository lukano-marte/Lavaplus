   
        <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php include_once 'funcoes.php'; ?> 
</head>
    <body class="container">

       
        <?php
        
         include_once 'conexao.php';
        
        
        $cnome             = trataNome($_POST["cnome"]);
        $ctelefone         = $_POST["ctelefone"];
        $cassunto          = $_POST["cassunto"];
        $cemail            = $_POST["cemail"];
        $cobservacao       = $_POST["cobservacao"];
       
        
        $sql = "INSERT INTO contatos VALUES(null, '{$cnome}','{$ctelefone}','{$cassunto}','{$cemail}','{$cobservacao}')";
        
        
        if(mysqli_query($con, $sql)){
            
            
            echo  "<script>alert('Entraremos em contato em breve!'), window.open('index.php','_self')</script>";
        }else{
            echo "<p class='alert alert-danger'>Erro ao gravar!</p>";
        } ?>
        
        
        <br>
        
        <a href="index.php">Página Inicial</a>
        
        
<!-- ----------------------------------------------------------------------------------------------- -->
        
        
        
        
    </body>
</html>

