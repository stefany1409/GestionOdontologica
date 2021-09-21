<?php
$pagina = isset($_GET['p'])? strtolower($_GET['p']): 'index';

require_once 'paginas/header.php';

require_once 'paginas/' .$pagina. '.php';

require_once 'paginas/footer.php';



?>