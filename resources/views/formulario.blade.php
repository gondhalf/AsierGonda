<html>
<head></head>
<body>
<form action="respuesta"  method="post">
    {{ csrf_field() }}
        <input type="text" name="usuario" placeholder="usuario">
        <input type="submit" value="enviar">
</form>
</body>
</html>