<?php
    require_once "conexao.inc.php";


    session_start();


    if($conexao):
?>

    <?php 
        mysqli_select_db($conexao, "barbearia");


        if(isset($_POST["email"]) && isset($_POST["senha"])){
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["senha"] = $_POST["senha"];
        }

        if(isset($_SESSION["email"]) && isset($_SESSION["senha"])):
            $email = $_SESSION["email"];
            $senha = $_SESSION["senha"];


            $resultado = mysqli_query(
                $conexao,
                "SELECT * FROM `usuarios` WHERE `email` = '$email' AND `senha` = '$senha';"
            );
    ?>

        <?php if($resultado): ?>

            <?php if(mysqli_num_rows($resultado) > 0): ?>

                <?php
                    $resultado = mysqli_query(
                        $conexao,
                        "SELECT * FROM `agendamentos_cadastrados` WHERE `email` = '$email'"
                    );

                    if($resultado):
                ?>

                    <?php if(mysqli_num_rows($resultado) > 0): ?>

                        <div>
                            <form
                                action="?pg=agendamento/alteracoes-no-agendamento/update"
                                method="post"
                            >
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Posição</th>
                                            <th>E-Mail</th>
                                            <th>Prazo Marcado</th>
                                            <th>Alterar</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($linha = mysqli_fetch_array($resultado)): ?>
                                            <tr>
                                                <td>
                                                    <input type="hidden" name="posicoes[]" value="<?= $linha["Posicao"] ?>">
                                                    <?= $linha["Posicao"] ?>
                                                </td>
                                                <td><?= $linha["email"] ?></td>
                                                <td><?= $linha["Prazo_Marcado"] ?></td>
                                                <td><input type="date" name="novos-prazos[]" value="<?= $linha["Prazo_Marcado"] ?>"></td>
                                                <td>
                                                    <a
                                                        href="?pg=agendamento/alteracoes-no-agendamento/delete&posicao=<?= $linha["Posicao"] ?>"
                                                        class="btn-cancelar"
                                                        onclick="return confirm('Tem certeza que quer cancelar?')"
                                                    >
                                                        Cancelar
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>

                                <div class="button">
                                    <button type="submit">Submeter Alterações</button>
                                </div>

                            </form>
                        </div>

                        <div class="button">
                            <a href="?pg=pagina-de-acompanhamento">
                                <button>Voltar para acompanhamento</button>
                            </a>            
                        </div>

                        <?php operac(""); ?>

                    <?php else: ?>

                        <div class="button">
                            <a href="?pg=pagina-de-acompanhamento">
                                <button>Voltar para acompanhamento</button>
                            </a>            
                        </div>

                        <?php operac("Você não agendou nada ainda."); ?>

                    <?php endif; ?>

                <?php else: ?>

                    <div class="button">
                        <a href="?pg=pagina-de-acompanhamento">
                            <button>Voltar para acompanhamento</button>
                        </a>            
                    </div>

                    <?php operac("Erro na execução: ".mysqli_error($conexao)); ?>

                <?php endif; ?>

            <?php else: ?>

                <div class="button">
                    <a href="?pg=pagina-de-acompanhamento">
                        <button>Voltar para acompanhamento</button>
                    </a>            
                </div>

                <?php operac("Email ou senha incorretos!"); ?>

            <?php endif; ?>

        <?php else: ?>

            <div class="button">
                <a href="?pg=pagina-de-acompanhamento">
                    <button>Voltar para acompanhamento</button>
                </a>            
            </div>

            <?php operac("Erro na execução: ".mysqli_error($conexao)); ?>

        <?php endif; ?>

    <?php else: ?>

        <div class="button">
            <a href="?pg=pagina-de-acompanhamento">
                <button>Voltar para acompanhamento</button>
            </a>            
        </div>

        <?php operac("Sessão encerrada!"); ?>

    <?php endif; ?>

<?php else: ?>

    <div class="button">
        <a href="?pg=pagina-de-acompanhamento">
            <button>Voltar para acompanhamento</button>
        </a>            
    </div>

    <?php operac("Falha ao conectar ao banco de dados."); ?>

<?php endif; ?>