<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("alumno.store")}}" method="post">
        @csrf <!--es un token que garantiza que cuando
        le des al submit no expiren los valores del formulario-->
        Nombre <input type="text" name="nombre"><br/>
        apellido <input type="text" name="apellido"><br/>
        razon_social <input type="text" name="razon_social"><br/>
        CIF <input type="text" name="CIF"><br/>
        direccion <input type="text" name="direccion"><br/>
        telefono <input type="text" name="telefono"><br/>
        tipo <input type="text" name="tipo"><br/>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>

