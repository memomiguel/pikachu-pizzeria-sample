<?php include 'header.php'; 
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
?>

<main>

    <?php if($lang == 'it'): ?>
    <h1>Contattaci</h1>
    <p>Avete domande, suggerimenti o desiderate effettuare un ordine speciale? Scriveteci!</p>

    <div style="display: flex; gap: 40px; flex-wrap: wrap;">
        <!-- Formulario de Contacto -->
        <section style="flex: 1; min-width: 300px;">
            <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 10px;">
                <label for="nombre">Nome:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Il tuo nome">

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required placeholder="la_tua@email.com">

                <label for="asunto">Affare:</label>
                <select id="asunto" name="asunto">
                    <option value="pedido">Consegna a domicilio</option>
                    <option value="reserva">Prenotazione del tavolo</option>
                    <option value="queja">Suggerimento o reclamo</option>
                    <option value="otro">Altro</option>
                </select>

                <label for="mensaje">Messaggio:</label>
                <textarea id="mensaje" name="mensaje" rows="5" required placeholder="Scrivi qui il tuo messaggio..."></textarea>

                <button type="submit" style="background-color: #d32f2f; color: white; border: none; padding: 10px; cursor: pointer; font-weight: bold;">
                    Asciugatura del braccio
                </button>
            </form>
        </section>

        <!-- Datos de Ubicación -->
        <section style="flex: 1; min-width: 250px; background-color: #f9f9f9; padding: 20px; border-radius: 5px;">
            <h3>Venite a trovarci</h3>
            <p><strong>Indirizzo:</strong> Via Roma 242, Avezzano.</p>
            <p><strong>Email:</strong> memomiguel3000@gmail.com</p>
            <p><strong>Telefono:</strong> +34 671 21 77 48</p>
            <p><strong>Orari di apertura:</strong> <br>
               Dal Lunedì al Venerdì: 12:00 - 22:00 <br>
               Sabato e Domenica:: 12:00 - 00:00
            </p>
            
        </section>
    </div>

    <?php else: ?>
    <h1>Ponte en contacto con nosotros</h1>
    <p>¿Tienes alguna duda, sugerencia o quieres hacer un pedido especial? ¡Escríbenos!</p>

    <div style="display: flex; gap: 40px; flex-wrap: wrap;">
        <!-- Formulario de Contacto -->
        <section style="flex: 1; min-width: 300px;">
            <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 10px;">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre">

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required placeholder="tu@email.com">

                <label for="asunto">Asunto:</label>
                <select id="asunto" name="asunto">
                    <option value="pedido">Pedido a domicilio</option>
                    <option value="reserva">Reserva de mesa</option>
                    <option value="queja">Sugerencia o Queja</option>
                    <option value="otro">Otro</option>
                </select>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="5" required placeholder="Escribe aquí tu mensaje..."></textarea>

                <button type="submit" style="background-color: #d32f2f; color: white; border: none; padding: 10px; cursor: pointer; font-weight: bold;">
                    Enviar Mensaje
                </button>
            </form>
        </section>

        <!-- Datos de Ubicación -->
        <section style="flex: 1; min-width: 250px; background-color: #f9f9f9; padding: 20px; border-radius: 5px;">
            <h3>Visítanos</h3>
            <p><strong>Dirección:</strong> Via Roma 242, Avezzano.</p>
            <p><strong>Correo:</strong> memomiguel3000@gmail.com</p>
            <p><strong>Teléfono:</strong> +34 671 21 77 48</p>
            <p><strong>Horario:</strong> <br>
               Lunes a Viernes: 12:00 - 22:00 <br>
               Sábados y Domingos: 12:00 - 00:00
            </p>
            
        </section>
    </div>
    <?php endif; ?>
</main>

<?php include 'footer.php'; ?>