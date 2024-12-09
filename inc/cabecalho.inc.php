<?php
echo '<h1>Desenvolvimento Web</h1>';
if (strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) {

    echo "";
} else {

    echo '<a href="index.php">Home</a>';
}
