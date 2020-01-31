<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>LavaPlus</title>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    
    <link rel="shortcut icon" href="img/logoo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
</head>
<body>
    
    <!--código do popover-->
    <a class="wpp" data-toggle="popover-hover" href="https://api.whatsapp.com/send?l=pt&amp;phone=5521965430190">
        <img src="img/transparent.png" style="height:80px; position:fixed; bottom: 25px; right: 25px; z-index:100;" data-selector="img">
    </a>
    <!--fim do código popover-->

    <?php include_once 'nav.php';?>
    <?php include_once 'carousel.php';?>
    <hr>
    <div class="container" id="container">
        <?php include_once 'servicos.php';?>  
        <hr>
        <div class="row" id="c">
            <div class="col-sm-6 pb-2" id="quemSomos">
                <div class="card" style="border: 5px outset #4BC9F2; background-color: rgb(169, 211, 234);">
                    <div class="card-body">
                        <h2 class="card-title text-center">Quem Somos</h2>
                        <img class="card-img-top" src="img/iconquemsomos.png" alt="" width="100" height="100">
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalQuemSomos">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" id="Localizacao">
                    <div class="card" style="border: 5px outset #4BC9F2; background-color: rgb(169, 211, 234);">
                        <div class="card-body">
                            <h2 class="card-title text-center">Nossa Localização</h2>
                            <img class="card-img-top" src="img/iconlocalizacao.png" alt="" width="100" height="100">
                            <p class="card-text">
                            </p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLocalizacao">Saiba Mais</a>
                        </div>

                    </div>
                </div>
            </div> 
        <div class="row" id="cardsFotos">
            <div class="col-md-3 col-sm-6 pb-2">
                <div class="cards">
                    <div class="card text-center" style="border: 5px outset #4BC9F2; background-color: rgb(169, 211, 234);">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#modalClientes">
                            <div class="card-block">
                                <div class="card-tittle">
                                    <h4>Nossos Clientes</h4>
                                </div>
                                <img src="img/iconNossosClientes.png" alt="" class="img-fluid mt-2 mb-2">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 pb-2">
                <div class="cards">
                    <div class="card text-center" style="border: 5px outset #4BC9F2; background-color: rgb(169, 211, 234);">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#modalComoFunciona">
                            <div class="card-block">
                                <div class="card-tittle">
                                    <h4>Como Funciona</h4>
                                </div>
                                <img src="img/iconeComoFunciona.png" alt="" class="img-fluid mt-2 mb-2">

                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 pb-2">
                <div class="cards">
                    <div class="card text-center" style="border: 5px outset #4BC9F2; background-color: rgb(169, 211, 234);">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#modalAgendamento">
                            <div class="card-block">
                                <div class="card-tittle">
                                    <h4>Agendamento</h4>
                                </div>
                                <img src="img/Agendamento.png" alt="" class="img-fluid mt-2 mb-2">

                            </div>
                        </a>
                    </div>
                </div>
            </div>  
            <div class="col-md-3 col-sm-6">
                <div class="cards">
                    <div class="card text-center" style="border: 5px outset #4BC9F2; background-color: rgb(169, 211, 234);">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#modalContatos">
                            <div class="card-block">
                                <div class="card-tittle">
                                    <h4>Entre em Contato</h4>
                                </div>
                                <img src="img/iconContatos.png" alt="" class="img-fluid mt-2 mb-2">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   
    <footer id="rodape">
            <div class="card" style="border: 2px solid #4BC9F2; background-color: rgb(169, 211, 234);">
                <div class="card-body" style="text-align: center;">
                    <h6>Todos os direitos reservados © </h6>
                    <h6>Lavaplus</h6>
                </div>
            </div>
    </footer>

    </div>
<?php include_once 'localizacaomodal.php';?>
<?php include_once 'modalquemsomos.php';?>
<?php include_once 'modalcomofunciona.php';?>
<?php include_once 'modalcontato.php';?>
<?php include_once 'modalagendamento.php';?>
<?php include_once 'modalclientes.php';?>
<?php include_once 'tabelaprecos.php';?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<?php include_once 'script.php'?>
</body>
</html>
