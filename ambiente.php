<?php
session_start();

if ((!isset($_SESSION['usuario']) || ($_SESSION['usuario'] == false))
    || (!isset($_GET['mes']) || ($_GET['mes'] == false))
) {
    header('Location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiente</title>
</head>

<body>
    <header>
        <?php include_once('inc/cabecalho.inc.php'); ?>
    </header>
    <main>
        <h1>Seleção de ambiente</h1>

        <form method="get" action="sumario.php">
            <fieldset>
                <legend>Selecione o ambiente</legend>
                <label for="ambiente">Ambiente: </label>
                <select name="ambiente" id="ambiente">
                    <option value="labinfoa">Laboratório de Informática A</option>
                    <option value="labinfob">Laboratório de Informática B</option>
                    <option value="auditorio">Auditório</option>
                    <option value="quadra">Quadra Poliesportiva</option>
                    <option value="estac">Estacionamento</option>
                </select>
                <input type="submit" value="Ok">
            </fieldset>
        </form>

    </main>
    <footer>
        <?php include_once('inc/rodape.inc.php'); ?>
    </footer>
</body>

</html>