<div class="modal fade" id="modalAgendamento" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3B76BC;">
                <h5 class="modal-title" style="color:white;">Agendamento</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class=" modal-body">
                <div class="container-fluid">

                    <p><b>Preencha o formulário:</b></p>
                    <form action="gravar.php" method="post">
                        <div class="form-row">

                            <div class="form-group col-sm-6">

                                <label for="inputNome">Nome Completo</label>
                                <input type="text" class="form-control" name="nomecompleto" placeholder="Ex: João Silva" required>

                            </div>


                            <div class="form-group col-sm-6">

                                <label for="inputTelefone">Telefone</label>
                                <input type="tel" class="form-control" name="telefone" placeholder="Apenas Números" required  maxlength="9" pattern="([0-9]" title="Digitar somente números e não usar caracteres especiais">

                            </div>

                        </div>


                        <div class="form-row">

                            <div class="form-group col-sm-6">

                                <label for="inputSobrenome">CPF</label>
                                <input type="text" class="form-control" name="cpf" placeholder="Apenas Números" required maxlength="11" pattern="([0-9]{11})" title="Digite seu CPF sem caracteres especiais" maxlength="11">

                            </div>

                            <div class="form-group col-sm-6">

                                <label for="inputCEP">CEP</label>
                                <input type="text" class="form-control" name="cep" placeholder="Apenas Números" required maxlength="8" pattern="([0-9]{8})" title="Digite seu CPF sem caracteres especiais">
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group col-sm-6">

                                <label for="inputEnd">Endereço</label>
                                <input type="text" class="form-control" name="endereco" placeholder="Ex: Avenida Bartolomeu Mitre, nº 939" required>
                            </div>

                            <div class="form-group col-sm-6">

                                <label for="inputComp">Complemento</label>
                                <input type="text" class="form-control" name="logradouro" placeholder="Ex: AP301" required>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="inputPecas">Quantidade de Peças</label>
                                <select id="inputPecas" class="form-control" name="quantidade">
                                    <option selected value="">Unidade</option>
                                    <option value="01-17">01-17</option>
                                    <option value="18-30">18-30</option>
                                    <option value="31-45">31-45</option>
                                    <option value="46-60">46-60</option>
                                    <option value="60+">60+</option>

                                </select>
                            </div>

                            <div class="form-group col">
                                <label for="inputPecas">Forma de Pagamento</label>
                                <select id="inputPecas" class="form-control" name="pagamento">
                                   <option selected value="">Selecione</option>
                                    <option>Débito</option>
                                    <option>Crédito</option>
                                    <option>Dinheiro</option>
                                </select>
                            </div>


                        </div>


                        <label for="inputObservacoes">Observações</label>

                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="observacao" placeholder="Aqui você poderá colocar observações, sobre algumas peças específicas que você queira que um cuidado especial."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="float:right;">Enviar</button>

                        <div class="modal-footer">

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
