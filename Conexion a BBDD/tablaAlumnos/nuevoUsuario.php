<html>
    <body>
        <form action="insertarUsuario.php" method="post">
            <p>Nombre: <input type="text" name="nombre" min="3" max="20"></p>
            <p>Apellidos: <input type="text" name="apellidos" min="5" max="50"></p>
            <p>Correo: <input type="email" name="correo"></p>
            <p>Código Curso: <input type="number" name="codigo"></p>
            <p><input type="submit" value="Añadir Usuario"/></p>
        </form>
    </body>
</html>