<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            background-color: black;
            text-align: center;
        }
        h1 {
            color: white;
        }
        footer {
            background-color: black;
            text-align: center;
            height: 100px;
        }
        body {
            background-color: gray;
        }
        table {
            border-collapse: separate;
            border: black 5px solid;
        }
    </style>
</head>
<body>
<header>
    <a href="/">
        <x-button>Inicio</x-button></a>
    <form action="{{route("logout")}}" method='post'>
        @csrf
        <x-button>Desconectar</x-button>
    </form>

        <h1>Listado de alumnos</h1>
</header>
@auth
<a href="{{route("alumno.create")}}"><x-button>Nuevo alumno</x-button></a>
    <h2>Registrado como {{auth()->user()->name}}</h2>
@endauth
@guest
    <a href="{{route("login")}}">Login</a>
    <a href="{{route("register")}}">Registrarme</a>
@endguest
<table>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>Direccion</td>
    <td>CIF</td>
    <td>telefono</td>
    <td>Tipo de pago</td>


    @foreach($alumnos as $alumno)
        <tr>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellido}}</td>
            <td>{{$alumno->direccion}}</td>
            <td>{{$alumno->cif}}</td>
            <td>{{$alumno->telefono}}</td>
            <td>{{$alumno->tipo}}</td>
        <td><a href="{{route("alumno.show",$alumno->id)}}"><x-button>Edit</x-button></a></td>

            <td>
                <form action="{{route("alumno.destroy", $alumno->id)}}" method='post' >
                    @csrf
                        @method("DELETE")
                <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<footer>
    <h1>Proyecto</h1>
</footer>
</body>
</html>
