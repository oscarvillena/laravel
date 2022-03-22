
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto</title>
        <style>

            header {
                background-color: black;
                padding: 50px;
                width: 1800px;
                text-align: center;
            }
            div {
                background-color: gray;
                width: 1800px;
            }
            footer {
                background-color: black;
                padding: 50px;
                width: 1800px;
            }
            h1 {
                color: white;
            }
            body {
                background-color: gray;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><x-button>Log in</x-button></a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><x-button>Register</x-button></a>
                    @endif
                @endauth
            </div>
        @endif
            <header>
                    <h1> Proyecto </h1>
            </header>
            <h2>Si presionas en el boton te llevara al listado de alumnos. <a href="{{ url('/alumno') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><x-button>Alumnos</x-button></a></h2>
            <h2>A continucion explicare qué es laravel y diferentes curiosidades de el. </h2>
            <h2>Laravel es un framework de PHP para ayudarnos en un tipo de desarrollo sobre aplicaciones escritas en este lenguaje de programación. Esté framework o más bien podría llamarlo compañero de ahora en adelante, nos ayuda en muchas cosas al desarrollar una aplicación, por medio de sus sistema de paquetes y de ser un framework del tipo MVC (Modelo-Vista-Controlador) da como resultado que podamos “despreocuparnos” (por así decirlo) en ciertas aspecto del desarrollo, cómo instanciar clases y métodos para usarlos en muchas partes de nuestra aplicación sin la necesidad de escribirlo y repetirlos muchas veces con lo que eso conlleva a la hora de modificar algo en el código.

                Funciona como muchos otros ya, desde la línea de comandos con el famoso Artisan que es el nombre que le dan a esta interfaz por comandos para ejecutar muchas funcionalidades como ver todas las rutas de la aplicación disponible, o poner a correr la aplicación o pararla. Es tan potente y sencillo de usar que una vez que lo has probado en alguna aplicación te puedes “malacostumbrar” y echarlo de menos cuando haces otra aplicación con otro framework que no cuenta con él.

                El futuro de Laravel es bastante prometedor y amplio, si lo sabes usar tienes mucho profesionalmente ganado y si no lo sabes y te apetece crecer profesionalmente y formarte sobre otro framework, ya sabes por dónde empezar. Con solo tener 1 año de experiencia con el framework ya hay ofertas a raudales de trabajo y seguro que muchos proyectos increíbles en los que participar, probablemente no te hace falta tanta experiencia para trabajar en un proyecto desarrollado con Laravel aunque los reclutadores y gente de recursos humanos suelen pedir 1 o incluso 2 años de experiencia sobre este u otro framework.</h2>
    <footer>
        <h1>Proyecto Oscar Villena</h1>
    </footer>
    </body>
</html>
