<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="shortcut icon" href="img/logoo.png">
    <title>Administrador</title>
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
    <br>
    <hr>
    <br>
    <div class="container">
        
        <br>
        
         <h3 class="blockquote text-center">
                Console de Administrador - Consulte seus agendamentos e tentativas de contatos feito por usuários
                </h3>
        <br>
        
        <div class="row">

           

            <div class="col-sm-6">
                <div class="card border-dark mb-3" style="text-align: center;">
                    <img class="card-img-top" src="img/consultarAgendamento.jfif" alt="Imagem de capa do card">
                    <div class="card-body" style="background-color:black;">
                        <h5 class="card-title" style="color: white;">Consultar Agendamento</h5>
                        <p class="card-text" style="color: white;">Consulte, atualize e feche os pedidos enviados pelos seus clientes.</p>
                        <a href="consultarAgendamento.php" class="btn btn-light">Consultar</a>
                    </div>
                </div>
            </div>



            <div class="col-sm-6">
                <div class="card border-dark mb-3" style="text-align: center;">
                    <img class="card-img-top" src="img/consultarContato.jfif" alt="Imagem de capa do card">
                    <div class="card-body" style="background-color:black;">
                        <h5 class="card-title" style="color: white;">Consultar Contatos</h5>
                        <p class="card-text" style="color: white;">Consulte contatos feitos por clientes e clientes parceiros.</p>
                        <a href="consultarContatos.php" class="btn btn-light">Consultar</a>
                    </div>
                </div>
            </div>
            
            
        </div>
        
        <!--
     <footer>
            <div class="card border-dark mb3">
                <div class="card-body" style="text-align: center;">
                    <h6>Todos os direitos reservados © </h6>
                    <h6>Lavaplus</h6>
                </div>
            </div>
        </footer>    
    -->     
        
    </div>
    
    
    


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
</body>
</html>

<!--

<style>
   
        
         body {
 background-image: url("http://images7.memedroid.com/images/UPLOADED895/5c41cf0719322.jpeg");
 background-color: #cccccc;
}
    

</style>


-->