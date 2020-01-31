
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Excluir Agendamento</title>
    <?php include_once 'verificaLogin.php'; ?>
</head>
<body>
    <div class="container">
    <?php
        $id = $_GET["id"];
        include_once 'conexao.php';
        $sql = "DELETE FROM agendamento WHERE id=".$id;
        if(mysqli_query($con, $sql)){
            echo  "<script>alert('Excluído com sucesso!'), window.open('consultarAgendamento.php','_self')</script>";
        }else{
            echo "<p class='alert alert-danger'>Erro ao deletar pedido.</p>";
        }
    ?>

    </div>
</body>
</html>

