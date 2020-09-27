<?php
require_once('./inc/head.php');
require_once('./inc/header.php');
?>

<body>

    <main>

        <article id="containerForm" class="container border mt-5">
            <form action="metodos.php" method="POST">
                <input type="hidden" value="promo01">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="raca">Raça ou Variedade:</label>
                        <input type="text" class="form-control" name="inputRaca" placeholder="Raça/Variedade">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCanil">Nome do Canil Registrado:</label>
                        <input type="text" class="form-control" name="inputCanil" placeholder="Nome do Canil Registrado">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCriador">Criador:</label>
                        <input type="text" class="form-control" name="inputCriador" placeholder="Criador">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputDtNasc">Data de Nascimento:</label>
                        <input type="date" class="form-control" name="inputDtNasc" placeholder="Data de Nascimento">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputNomes">Nomes:</label>
                        <input type="text" class="form-control" name="inputNomes" placeholder="Nomes" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputSexo">Sexo:</label>
                        <select class="form-control" name="inputSexo" required>
                            <option selected disabled>Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="inputCor">Cor:</label>
                        <input type="text" class="form-control" name="inputCor" placeholder="Cor">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputNumRegistroCr">N° Registro de C.R.:</label>
                        <input type="text" class="form-control" name="inputNumRegistroCr" placeholder="N° Registro de C.R.">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="criadorRaca">Criador da raça:</label>
                        <input type="text" class="form-control" name="inputCriadorRaca" placeholder="Criador da raça">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">E-mail</label>
                        <input type="email" class="form-control" name="inputEmail" placeholder="E-mail">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="paiNome">Pai - Nome:</label>
                        <input type="text" class="form-control" name="inputPaiNome" placeholder="Pai - Nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="maeNome">Mãe - Nome:</label>
                        <input type="text" class="form-control" name="inputMaeNome" placeholder="Mãe - Nome">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="numRegPai">Registro N°:</label>
                        <input type="text" class="form-control" name="inputRegNumPai" placeholder="Registro N°">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="numRegMae">Registro N°:</label>
                        <input type="text" class="form-control" name="inputRegNumMae" placeholder="Registro N°">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="propMacho">Proprietário do Macho:</label>
                        <input type="text" class="form-control" name="inputPropMacho" placeholder="Proprietário do Macho">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="propFemea">Proprietário da Fêmea</label>
                        <input type="text" class="form-control" name="inputPropFemea" placeholder="Proprietário da Fêmea">
                    </div>
                </div>


                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="inputEnderecoPai">Endereço</label>
                        <input type="text" class="form-control" name="inputEnderecoPai" placeholder="Endereço">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEnderecoMae">Endereço</label>
                        <input type="text" class="form-control" name="inputEnderecoMae" placeholder="Endereço">
                    </div>
                </div>
                <div class="form-group">

                </div>
                <div class="form-row">

                    <button type="submit" class="btn btn-primary float-right ml-0 mr-5 mt-4 mb-3 col-md-2">Enviar</button>

                    <button type="reset" class="btn btn-secondary float-right ml-2 mt-4 mb-3">Limpar</button>


                </div>

            </form>
        </article>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="confirmarExclusao" tabindex="-1" role="dialog" aria-labelledby="confirmarExclusaoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmarExclusaoLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam at eaque ratione cupiditate corrupti
                    voluptatum laboriosam, qui quis expedita labore nisi tempora non quia sunt perferendis. Officia
                    ipsum fugit mollitia!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include_once('./inc/footer.php') ?>

</html>