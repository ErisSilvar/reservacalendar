<?php
if (strpos($_SERVER['REQUEST_URI'], 'sobre.php') !== false) {

    echo "";
} else {

    echo '<a href="sobre.php">Sobre</a>';
}
