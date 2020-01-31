<div class="modal fade" id="modalContatos" tabindex="1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#3B76BC;">
                    <a style="color:white; font-size:22px;"> Contatos </a>



                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class=" modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="container-fluid">






                                <form action="cgravar.php" method="post">


                                    <div class="form-row">

                                        <div class="form-group col-sm-6">

                                            <label for="inputNome">Nome / Razão Social</label>
                                            <input type="text" class="form-control" name="cnome" required placeholder="Ex: Hotel Astoria">

                                        </div>
                                        <div class="form-group col-sm-6">

                                            <label for="inputAssunto">Assunto</label>
                                            <input type="text" class="form-control" name="cassunto" required placeholder="Ex: Dúvida">

                                        </div>
                                    </div>


                                    <div class="form-row">

                                        <div class="form-group col-sm-6">

                                            <label for="inputNome">Email</label>
                                            <input type="email" class="form-control" name="cemail" required placeholder="Ex: seu_email@gmail.com">

                                        </div>
                                        <div class="form-group col-sm-6">

                                            <label for="inputSobrenome">Telefone</label>
                                            <input type="tel" class="form-control" name="ctelefone" required placeholder="Apenas Números" maxlength="9" 
                                            pattern="([0-9]" title="Digitar somente números e não usar caracteres especiais">

                                        </div>
                                    </div>


                                    <label for="inputObservacoes">Observações</label>

                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="cobservacao" placeholder="Aqui você poderá colocar observações, sobre algumas peças específicas que você queira que um cuidado especial."></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" style="float:right;">Enviar</button>


                                </form>

                                <br><br>

                                <div class="text-black">
                                    <h6 class="text-uppercase mt-4 font-weight-bold">A Lavaplus terá o prazer em responder você! </h6>

                                    <i class="fas fa-phone mt-3"></i><b> Telefone:</b> (21) 2542-9739<br>
                                    <i class="fa fa-envelope mt-3"></i><b> Email:</b> gr.soft.17@gmail.com<br><br>

                                    <b>Horário de funcionamento:</b> <br>
                                    <i class="far fa-clock"></i> Segunda-feira à Sexta-feira de 8:30 às 18h<br>
                                    <i class="far fa-clock"></i> Sábado 8:30 às 17h <br>
                                    <i class="far fa-map"></i><b> Lava Plus, Av. Princesa Isabel, 186 Loja F - Copacabana, Rio de Janeiro - RJ, 22011-010</b><br>

                                </div>





                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

