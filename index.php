<?php
    session_start();



    if(isset($_SESSION['usuario']) && $_SESSION['usuario']){
        $user = $_SESSION['usuario'];
        $logout = '<a href="logout.php"><p>logout</p></a>';
    }


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .usuario{
            display: flex;
        
        }
    </style>
</head>

<body>
    <header>
        <?php include_once('inc/cabecalho.inc.php'); ?>
        <div class="usuario">
            <?php 
                if (isset($user) && isset($logout)) {
                    echo '<p>' . $user . '&nbsp;' . $logout . '</p>';
                } 
            
            ?>
        </div>
    </header>
    <main>
        <h1>Home</h1>
        <form method="get" action="login.php">
            <fieldset>
                <legend>Identificação</legend>
                <label for="usuario">Nome: </label>
                <input type="text" name="usuario" id="usuario">
                <input type="submit" value="Ok">
            </fieldset>
        </form>
        <br>
    </main>
    <footer>
        <?php include_once('inc/rodape.inc.php'); ?>
    </footer>
</body>

</html>