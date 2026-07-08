<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Pikachu's Pizzeria</title>
    <link rel="icon" type="image/png" href="imagenes/logo.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <img src="imagenes/logo.png" alt="Logo" width="100">
    <nav> 
       <?php if($lang == 'it'): ?>
            <a href="index.php?lang=<?php echo $lang; ?>">Inizio</a>
            <a href="quienes-somos.php?lang=<?php echo $lang; ?>">Chi siamo</a>
            <a href="servicios.php?lang=<?php echo $lang; ?>">Menu</a>
            <a href="contacto.php?lang=<?php echo $lang; ?>">Contattaci</a>

       <?php else: ?>
            <a href="index.php?lang=<?php echo $lang; ?>">Inicio</a>
            <a href="quienes-somos.php?lang=<?php echo $lang; ?>">Quienes somos</a>
            <a href="servicios.php?lang=<?php echo $lang; ?>">Menu</a>
            <a href="contacto.php?lang=<?php echo $lang; ?>">Contactanos</a>
      <?php endif; ?>

    <div class="idiomas">
            <a href="?lang=es" title="Español">
                <img src="imagenes/es.png" alt="Español" width="30">
            </a>
            <a href="?lang=it" title="Italiano">
                <img src="imagenes/it.png" alt="Italiano" width="30">
            </a>
        </div>
    </nav>
</header>
<hr>