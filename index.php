<?php include 'header.php'; 
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
?>

<main>
    <?php if($lang == 'it'): ?>
    <h1>Benvenuti alla Pikachu's Pizzeria</h1>
    <p>Le migliori pizze della zona, preparate ogni giorno con ingredienti freschi. Preparatevi a un'esperienza indimenticabile.</p>
    <img src="imagenes/pizza-principal.jpg" alt="Pizza artesanal" style="max-width:100%;">


    <?php else: ?>
    <h1>Bienvenido a Pikachu's Pizzeria</h1>
    <p>Las mejores pizzas de la zona, preparadas con ingredientes frescos todos los días. Preparate para una experiencia impactante.</p>
    <img src="imagenes/pizza-principal.jpg" alt="Pizza artesanal" style="max-width:100%;">

    <?php endif; ?>
</main>

<?php include 'footer.php'; ?>