<?php include 'header.php'; 
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
?>

<main>

    <?php if($lang == 'it'): ?>
    <section>
        <h1>La nostra storia</h1>
        <p>Nata dalla passione per la cucina tradizionale, la nostra pizzeria si propone di portare alla comunità locale il gusto autentico dell'impasto artigianale.</p>
        <p>Proveniamo dal prestigioso istituto IES El Álamo di Madrid.</p>
        
        <h2>Qualità e tradizione</h2>
        <p>Selezioniamo con cura ogni ingrediente: dai pomodori per la nostra salsa segreta alla mozzarella di altissima qualità. Crediamo che il segreto di una buona pizza risieda nel tempo; ecco perché il nostro impasto lievita per 24 ore, per raggiungere la consistenza perfetta.</p>
    </section>

    <section>
        <h2>I nostri valori</h2>
        <ul>
            <li><strong>Ingredienti freschi:</strong> Non utilizziamo mai prodotti congelati.</li>
            <li><strong>Attenzione personalizzata:</strong> Facciamo parte del quartiere e trattiamo ogni cliente come un ospite a casa nostra.</li>
            <li><strong>Passione per i dettagli:</strong> Ogni pizza viene stesa a mano e cotta alla perfezione.</li>
        </ul>
    </section>

    <section>
        <h2>La nostra missione</h2>
        <p>Il nostro obiettivo è preparare pizze eccezionali che uniscano le persone. La nostra missione è semplice: qualità senza compromessi, ingredienti locali e quel tocco artigianale che rende ogni pizza unica.</p>
    </section>

    <?php else: ?>
    <section>
        <h1>Nuestra Historia</h1>
        <p>Fundada con la pasión por la cocina tradicional, nuestra pizzería nació del deseo de traer el auténtico sabor de la masa artesanal a nuestra comunidad local.</p>
        <p>Venimos desde el prestigioso instituto de I.E.S. El Álamo en Madrid.</p>
        
        <h2>Calidad y Tradición</h2>
        <p>Seleccionamos cuidadosamente cada ingrediente: desde el tomate para nuestra salsa secreta hasta el queso mozzarella de la mejor calidad. Creemos que el secreto de una buena pizza está en el tiempo; por eso, nuestra masa fermenta durante 24 horas para lograr esa textura perfecta.</p>
    </section>

    <section>
        <h2>Nuestros Valores</h2>
        <ul>
            <li><strong>Ingredientes Frescos:</strong> Nunca usamos productos congelados.</li>
            <li><strong>Atención Cercana:</strong> Somos parte del barrio y tratamos a cada cliente como a un invitado en nuestra casa.</li>
            <li><strong>Pasión por el Detalle:</strong> Cada pizza se estira a mano y se hornea en el punto exacto.</li>
        </ul>
    </section>

    <section>
        <h2>Nuestra misión</h2>
        <p>Cocinar pizzas excepcionales que unan a las personas. Nuestra misión es simple: calidad sin compromisos, ingredientes locales y ese toque artesanal que nos hace únicos en cada horneada.</p>
    </section>
    
    <?php endif; ?>
</main>

<?php include 'footer.php'; ?>