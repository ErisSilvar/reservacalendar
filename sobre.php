<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>
    <style>
        img {
            border-radius: 50%;
            margin: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        h1, a {
            text-align: center;
            display: block;
        }

        h2, p, ul, li {
            margin-top: 10px;
            text-align: center;
        }

        .equipe {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
        }

        .membro {
            text-align: center;
            margin-bottom: 30px;
        }

        .equipe p {
            font-size: 16px;
            font-style: italic;
            font-weight: bold;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header>
        <?php include_once('inc/cabecalho.inc.php'); ?>
    </header>
    <main>
        <h1>Nosso time</h1>
        <div class="equipe">
            <div class="membro">
                <img src="imgs/ft_eris.jpg" width="300" height="300">
                <h2>Eris Emanoel Ribeiro Silva</h2>
                <p>eers@aluno.ifnmg.edu.br</p>
            </div>

            <div class="membro">
                <img src="imgs/ft_abner.JPG" width="300" height="300">
                <h2>Abner Rodrigues Antunes</h2>
                <p>ara9@aluno.ifnmg.edu.br</p>
            </div>

            <div class="membro">
                <img src="imgs/ft_emanuele.jpg" width="300" height="300">
                <h2>Emanuele Rodrigues Ferreira</h2>
                <p>erf6@aluno.ifnmg.edu.br</p>
            </div>

            <div class="membro">
                <img src="imgs/ft_hianca.jpg" width="300" height="300">
                <h2>Hianca Rafaella Gomes Oliveira</h2>
                <p>hrgo@aluno.ifnmg.edu.br</p>
            </div>
        </div>
        <br>
        <h1>Nossos objetivos</h1>
        <ul>
            <li>Ser alunos nota 10.</li>
            <li>Fixar a matéria.</li>
            <li>Nós tornar profissionais.</li>
        </ul>
        <br>
        <h1>Nossa missão</h1>
        <p>Nossa missão é se esforçar para proporcionar um projeto de qualidade.</p>
    </main>
    <footer>
        <?php include_once('inc/rodape.inc.php'); ?>
    </footer>
</body>

</html>
