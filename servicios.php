<?php include 'header.php'; 
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
?>

<main>

<?php if($lang == 'it'): ?>
<section>
    <h2>Il nostro menù</h2>
        <div><strong>Pizza Margherita - €8</strong></div><br>
        <div>Preparata con una base di salsa di pomodoro artigianale, mozzarella, foglie di basilico fresco e un filo d'olio extravergine d'oliva.</div><br>
        <img src="imagenes/pizza-margarita.jfif" alt="Pizza Margarita" width="300"><br><br><br><br>
        <div><strong>Pizza ai peperoni - €10</strong></div><br>
        <div>Fette di salame piccante stagionato su un doppio strato di mozzarella.</div><br>
        <img src="imagenes/pizza-peperoni.jfif" alt="Pizza Pepperoni" width="300"><br><br><br><br>
        <div><strong>Pizza speciale della casa "Elettrizzante" - €12</strong></div><br>
        <div>Una base classica di prosciutto di York e mozzarella, sormontata da ananas naturale tagliato a mano a forma di fulmine per un contrasto agrodolce pieno di energia.</div><br>
        <img src="imagenes/pizza-especial.jfif" alt="Pizza Margarita" width="300">

</section>

<?php else: ?>
<section>
    <h2>Nuestro Menú</h2>
        <div><strong>Pizza Margarita - €8</strong></div><br>
        <div>Elaborada con una base de salsa de tomate artesanal, mozzarella, hojas frescas de albahaca y un toque de aceite de oliva virgen extra.</div><br>
        <img src="imagenes/pizza-margarita.jfif" alt="Pizza Margarita" width="300"><br><br><br><br>
        <div><strong>Pizza Pepperoni - €10</strong></div><br>
        <div>Láminas de pepperoni curado sobre una capa doble de queso mozzarella</div><br>
        <img src="imagenes/pizza-peperoni.jfif" alt="Pizza Pepperoni" width="300"><br><br><br><br>
        <div><strong>Pizza Especial Electrizante de la Casa - €12</strong></div><br>
        <div>Una base clásica de jamón de York y mozzarella, coronada con piña natural cortada artesanalmente en forma de rayo para un contraste dulce y ácido lleno de energía.</div><br>
        <img src="imagenes/pizza-especial.jfif" alt="Pizza Margarita" width="300">

</section>

<?php endif; ?>
</main>

<?php include 'footer.php'; ?>