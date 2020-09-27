<?php
require_once('./inc/head.php');
require_once('./inc/header.php');
?>

<Body>
    <main>
        <?php if ($_POST && isset($_POST)) { ?>

            <?php

            $raca  = $_POST["inputRaca"];
            $canil = $_POST["inputCanil"];
            $criador  = $_POST["inputCriador"];
            $dtnasc  = $_POST["inputDtNasc"];
            $nomes  = $_POST["inputNomes"];
            $sexo  = $_POST["inputSexo"];
            $cor  = $_POST["inputCor"];
            $numRegistroCr  = $_POST["inputNumRegistroCr"];
            $criadorRaca = $_POST["inputCriadorRaca"];
            $email = $_POST["inputEmail"];
            $paiNome = $_POST["inputPaiNome"];
            $maeNome = $_POST["inputMaeNome"];
            $regNumPai = $_POST["inputRegNumPai"];
            $regNumMae = $_POST["inputRegNumMae"];
            $proMacho = $_POST["inputPropMacho"];
            $propFemea = $_POST["inputPropFemea"];
            $enderecoPai = $_POST["inputEnderecoPai"];
            $enderecoMae = $_POST["inputEnderecoMae"];

            ?>

            <article>
                <h2>Respostas Recebidas por POST:</h2>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Raça</th>
                            <th scope="col">Nome do Canil</th>
                            <th scope="col">Criador</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Nomes</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Cor</th>
                            <th scope="col">N° Registro de C.R.</th>
                            <th scope="col">Criador da Raça</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Pai - Nome</th>
                            <th scope="col">Mãe - Nome</th>
                            <th scope="col">Registro N° - Pai</th>
                            <th scope="col">Registro N° - Mãe</th>
                            <th scope="col">Proprietário do Macho</th>
                            <th scope="col">Proprietário da Fêmea</th>
                            <th scope="col">Endereco Pai</th>
                            <th scope="col">Endereco Mãe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $raca ?></td>
                            <td><?= $canil ?></td>
                            <td><?= $criador ?></td>
                            <td><?= $dtnasc ?></td>
                            <td><?= $nomes ?></td>
                            <td><?= $sexo ?></td>
                            <td><?= $cor ?></td>
                            <td><?= $numRegistroCr ?></td>
                            <td><?= $criadorRaca ?></td>
                            <td><?= $email ?></td>
                            <td><?= $paiNome ?></td>
                            <td><?= $maeNome ?></td>
                            <td><?= $regNumPai ?></td>
                            <td><?= $regNumMae ?></td>
                            <td><?= $proMacho ?></td>
                            <td><?= $propFemea ?></td>
                            <td><?= $enderecoPai ?></td>
                            <td><?= $enderecoMae ?></td>
                        <tr>
                    </tbody>
                </table>
            </article>

            <div id="d">
                <script language="javascript">
                    function imprime(text) {
                        text = document
                        print(text)
                    }
                </script>
                <form>
                    <input type="button" value="imprimir" name="imprimir" onclick="imprime()">
                </form>
            </div>

        <?php } else { ?>

            <article class="alert alert-warning col-6 mx-auto" role="alert">
                <p><b>Ops... parece que nenhum dado foi recebido!</b></p>
                <p>Por favor, preencha o formulário o formulário <a href="11-metodo-POST.php" title="Acessar o Formulário POST" rel="next">POST</a>.</p>
                <p>Se você acabou de preencher o formulário, foi direcionado para essa página e está vendo essa mensagem...<br />deve ter algum erro no seu código! Nesse caso... bora debugar! hehehe</p>
            </article>

        <?php } ?>
    </main>
</Body>

<?php
require_once('./inc/footer.php')
?>