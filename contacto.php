<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>La Granjita | Ubicacion</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsivecss" />
</head>

<body>

    <!-- HEADER CON PHP -->
    <?php include 'includes/header.php' ?>
    <!-- HEADER CON PHP -->

    <div id="wrapper">
        <div id="content">

            <div class="container">
                <div class="box P" style="padding: 10px;">

                    <h3>Contactanos</h3><br>
                    <form action="submeter-formulario.php" method="post">

                        Nombre
                        <input class="input0" type="text" name="introducir_nombre" id="nombre" required="obligatorio"
                            placeholder="Escribe tu nombre" />

                        Email
                        <input class="input0" type="email" name="introducir_email" id="email" required="obligatorio"
                            placeholder="Escribe tu Email" />

                        Teléfono
                        <input class="input0" type="tel" name="introducir_telefono" id="telefono"
                            placeholder="Escribe tu teléfono" />

                        Direccion
                        <input class="input0" type="url" name="introducir_direccion" id="direccion"
                            placeholder="Escribe la direccion de envio" />

                        Asunto
                        <input class="input0" type="text" name="introducir_asunto" id="assunto" required="obligatorio"
                            placeholder="Escribe el asunto" />

                        Mensaje
                        <textarea class="textarea0" name="introducir_mensaje" id="mensaje" required="obligatorio"
                            placeholder="Deja aquí tu comentario"></textarea>

                        <button class="button0" type="submit" name="enviar_formulario" id="enviar">
                            Enviar
                        </button>

                    </form>

                </div>
                <div class="box MG">
                    <img class="porf" src="https://www.nevistas.com/ul/4/2019/09/04/08.jpg">
                </div>
                <div class="box G">
                    <iframe class="mapa"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.1664304992696!2d-89.19575508472143!3d13.70836790199076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6330946c97eb9b%3A0x6ce3ebd8c82585a5!2sCONEXION!5e0!3m2!1ses!2ssv!4v1679678806110!5m2!1ses!2ssv"
                        width="100%" height="500px" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>

    <!-- FOOTER CON PHP -->
    <?php include 'includes/footer.php' ?>
    <!-- FOOTER CON PHP -->

</body>

</html>