<!doctype html>
<html lang="es">
<head>
    <meta charsrt="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda tec-productos</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <header>
        <h1>productos</h1>
        <nav aria-label="principal">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php" aria-current="page">Catalogo</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>catalogo</h2>
        <a href="agregar-producto.php" class="boton-agregar">Agregar producto +</a>
        <section class="tarjetas-productos">
            <article>
                <img
                    src="https://placehold.co/200x150"alt="Imagen del producto">
                <div class="tarjeta-producto-info">
                    <h3>mause inalambroco</h3>
                    <p class="etiqueta-categoria">categoria: perifericos</p>
                    <p class="texto-secundario">texto secundario o de detalle</p>
                    <p class="tarjeta-producto-precio">precio: $299.00</p>
                    <a class="enlace-detalle" href="producto-detalle.php?id=1">ver detalle</a>
                </div>
            </article>
            <article>
                <h3>teclado mecanico</h3>
                <p>categoria: perifericos</p>
                <p>precio: $899.00</p>
                <a href="producto-detalle.php?id=2">ver detalle</a>
            </article>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 tienda Tec. todos los derechos reservados</p>
    </footer>
</body>
</html>
