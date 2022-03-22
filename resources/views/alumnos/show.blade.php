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
    <form action="{{route("alumno.update",$alumno->id)}}" method="post">
        @csrf <!--es un token que garantiza que cuando
        le des al submit no expiren los valores del formulario-->
            @method('put')
        Nombre <input type="text" value="{{$alumno->nombre}}" name="nombre"><br/>
        apellido <input type="text" value="{{$alumno->apellido}}" name="apellido"><br/>
        razon_social <input type="text" value="{{$alumno->razon_social}}" name="razon_social"><br/>
        CIF <input type="text" value="{{$alumno->CIF}}" name="CIF"><br/>
        direccion <input type="text" value="{{$alumno->direccion}}" name="direccion"><br/>
        telefono <input type="text" value="{{$alumno->telefono}}" name="telefono"><br/>
        tipo <input type="text" value="{{$alumno->tipo}}" name="tipo"><br/>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>

