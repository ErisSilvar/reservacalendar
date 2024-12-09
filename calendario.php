<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == false) {
    header('Location: index.php'); 
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
    <style>
        td,
        th,
        table {
            border: 1px solid black;
            border-spacing: 0;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: blue;
        }
    </style>
</head>

<body>
    <header>
        <?php include_once('inc/cabecalho.inc.php'); ?>
    </header>
    <main>
        <h1>Calendário</h1>

        <form method="get" action="calendario.php">
            <label for="mes">Escolha o mês:</label>
        
            <input type="month" id="mes" name="mes" value="<?php echo isset($_GET['mes']) ? $_GET['mes'] : date('Y-m'); ?>" onchange="this.form.submit()">
        </form>

        <?php
       
        setlocale(LC_TIME, 'pt_BR.utf8', 'pt_BR', 'portuguese');

        
        $data = isset($_GET['mes']) ? $_GET['mes'] : date('Y-m'); 
        
        $diasmes = date('t', strtotime($data));

        
        $diassemana = date('w', strtotime($data));

    
        $mesNome = strftime('%B', strtotime($data)); 
        echo "<h2>Calendário de " . ucfirst($mesNome) . " " . date('Y', strtotime($data)) . "</h2>";

        echo "<table>";
        echo "<tr>
                <th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sab</th>
              </tr>";
        echo "<tr>";


        
        for ($i = 0; $i < $diassemana; $i++) {
            echo "<td>&nbsp;</td>";
        }

        
        for ($i = 1; $i <= $diasmes; $i++) {
          
            $link = "ambiente.php?dia=" . $i . "&ano=" . date('Y', strtotime($data)) . "&mes=" . date('m', strtotime($data));

            echo "<td><a href='" . $link . "'>" . $i . "</a></td>";

            if (($i + $diassemana) % 7 == 0) {
                echo "</tr><tr>";
            }
        }

        for ($i = 0; $i < (7 - (($diasmes + $diassemana) % 7)); $i++) {
            echo "<td>&nbsp;</td>";
        }

        echo "</tr>";
        echo "</table><br>";
        ?>

    </main>
    <footer>
        <?php include_once('inc/rodape.inc.php'); ?>
    </footer>
</body>

</html>
