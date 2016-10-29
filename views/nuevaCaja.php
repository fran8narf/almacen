<html>
    <head>
        <meta charset="UTF-8">
        <title>Añadir nueva caja</title>
    </head>
    <body>
        <h1>Nueva caja:</h1>
        <form action="../controllers/crearCaja.php" method="POST" id="cajasForm">
            <select name="selectTipoCaja" form="cajasForm">
                <option value="cajafuerte">Caja Fuerte</option>
                <option value="cajasorpresa">Caja Sorpresa</option>
                <option value="cajanegra">Caja Negra</option>
            </select>
        </form>
    </body>
</html>