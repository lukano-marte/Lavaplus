<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logoo.png">
    <title>Consultar Contatos</title>
<?php include_once 'verificaLogin.php'; ?>
</head>
<body style="background-color:#D3D3D3;">
   
   
       <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand h1 mb-0 ml-2 nav-link scroll" href="administrador.php">LavaPlus</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item">
                    <a class="nav-link scroll " href="consultarAgendamento.php" style="color:white; font-size:18px;">Agendamentos</a>
                </li>
                <li class="nav-item">
                  
                    <a class="nav-link active" href="consultarContatos.php" style="color:white; font-size:18px;">Contatos</a>
                </li>
            </ul>
            <ul class="navbar navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="deslogar.php" data-toggle="" data-target="" style="color:white; font-size:18px;">
                        Sair
                    </a>
                </li>
            </ul>
        </div>
    </nav>
   
   
   
    <div class="container" style="margin-top:10%;padding: 25px 15px 25px 15px;box-shadow:0px 1px 18px 0px rgba(51, 50, 50, 1);background-color:white;
      border-radius:10px;">
       <i class="fas fa-search" style="font-size:35px;"> Consultar Contatos</i>
            <form style="width:300px">
            <br>
            <input type="text" name="nome" class="form-control" placeholder="Nome">
            <br>
            <input type="submit" class="btn btn-dark" value="Buscar"> 
        </form><hr>
        <?php
            if(isset($_GET["nome"])){
                $nome = $_GET["nome"];
                include_once 'conexao.php';
                $sql = "select * from contatos where nome like '%$nome%'";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){ ?>
                    <table class="table table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Assunto</th>
                            <th>Email</th>
                            <th>Observação</th>
                       
                        </tr>
                        <?php
                        while($row = mysqli_fetch_array($result)){?>
                              <tr>
                                  <td><?php echo $row["nome"]?></td>
                                  <td><?php echo $row["telefone"]?></td>
                                  <td><?php echo $row["assunto"]?></td>
                                  <td><?php echo $row["email"]?></td>
                                  <td><?php echo $row["observacao"]?></td>
                                  
                            
        
                              </tr>
                        <?php } ?>
                    </table>
                <?php } else { echo '<div class="alert alert-warning" role="alert">
                                    No momento não há registros!
                                    </div>'; }
            } ?> <br>
        
    </div>
    
     <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>