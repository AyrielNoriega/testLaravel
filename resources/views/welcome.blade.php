<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
 
 
    </head>
    <body class="antialiased">
        <h3>Listado etiquetas</h3>
        <table>
            @forelse ($tags as $tag)
                <tr>
                    <td>{{ $tags }}</td>
                </tr>
            @empty
                <tr>
                    <td>
                        <p>No hay etiquetas</p>
                    </td>
                </tr>
            @endforelse
        </table>
    </body>
</html>
