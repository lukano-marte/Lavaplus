<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar Agendamento</title>
</head>

<body>
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
                    <a class="nav-link scroll" href="consultarContatos.php" style="color:white; font-size:18px;">Contatos</a>
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
    <div class="container" style="margin-top: 10%; background-color: white; padding: 25px 15px 25px 15px; border-radius: 10px;-webkit-box-shadow: 3px 12px 41px 0px rgba(0,0,0,1);
-moz-box-shadow: 3px 12px 41px 0px rgba(0,0,0,1);
box-shadow: 3px 12px 41px 0px rgba(0,0,0,1);">
        <?php
            $id = $_GET["id"];
        
            include_once 'conexao.php';
        
            $sql = "SELECT * FROM agendamento WHERE id=".$id;
            $sql = "SELECT * FROM agendamento WHERE id=".$id;
        
            $result = mysqli_query($con,$sql);
        
            $linha = mysqli_fetch_array($result);
        ?>
        <h3>Editar Agendamento</h3>
        <form action="atualizar.php" method="post">
            <input type="hidden" name="id" class="form-control" value="<?php echo $linha["id"];?>">


            <div class="form-row">

                <div class="form-group col-sm-6">

                    Nome: <input type="text" name="nomecompleto" class="form-control" value="<?php echo $linha["nomecompleto"];?>">
                </div>

                <div class="form-group col-sm-6">
                    Telefone: <input type="tel" name="telefone" class="form-control" value="<?php echo $linha["telefone"];?>">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-sm-6">


                    CPF: <input type="text" name="cpf" class="form-control" value="<?php echo $linha["cpf"];?>">
                </div>
                <div class="form-group col-sm-6">

                    Endereço: <input type="text" name="endereco" class="form-control" value="<?php echo $linha["endereco"];?>">
                </div>
            </div>


            <div class="form-row">

                <div class="form-group col-sm-6">
                    Complemento: <input type="text" name="logradouro" class="form-control" value="<?php echo $linha["logradouro"];?>">

                </div>

                <div class="form-group col-sm-6">
                    Quantidade: <input type="text" name="quantidade" class="form-control" value="<?php echo $linha["quantidade"];?>">
                </div>
            </div>


            <div class="form-row">

                <div class="form-group col-sm-6">
                    Pagamento: <input type="text" name="pagamento" class="form-control" value="<?php echo $linha["pagamento"];?>">
                </div>

                <div class="form-group col-sm-6">
                    Observações: <input type="text" name="observacao" class="form-control" value="<?php echo $linha["observacao"];?>">

                </div>
            </div>
            <input type="submit" class="btn btn-dark" value="Atualizar" style="float: right; margin-top:15px; ">
        </form>
        <br>
        <a href="consultarAgendamento.php" style="margin-top: 15px;">Consultar Agendamento</a>
    </div>
    
     <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
 
 
</html>
