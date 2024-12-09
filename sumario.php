<?php
session_start();

if (isset($_SESSION['usuario']) && isset($_GET['ambiente'])) {

    $usuario = $_SESSION['usuario'];  
    $dia = date('d');  
    $mes = date('m');  
    $ano = date('Y');  
    $ambiente = $_GET['ambiente'];  

    
    $data_completa = "$ano-$mes-$dia";

    require_once 'class/rb.php';

    R::setup('mysql:host=127.0.0.1;port=3307;dbname=cadastrobd', 'root', '');

    $r = R::dispense('reserva');
    $r->nome = $usuario;  
    $r->data = $data_completa;  
    $r->ambiente = $ambiente;  

    $id = R::store($r);

    R::close();

    echo "<p>Reserva cadastrada com sucesso para o ambiente: $ambiente, no dia $dia de " . ucfirst(strftime('%B', strtotime($data_completa))) . " de $ano.</p>";
} else {
    echo '<p style="color:red;">Dados inválidos para cadastro da postagem. Verifique se todos os dados foram enviados corretamente.</p>';
}
?>
