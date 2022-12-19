<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header></header>
    <main>



        <style>

        </style>

        <table>
            <tr>
                <th>Numero treno</th>
                <th>Azienda</th>
                <th>Partenza</th>
                <th>Arrivo</th>
                <th>Orario

                <th>numero carrozze</th>
                <th>in orario</th>
                <th>cancellato</th>

            </tr>
            @foreach ($trains as $train)
                <tr>

                    <td>{{ $train->code_train }}</td>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->st_Partenza }}</td>
                    <td>{{ $train->st_Arrivo }}</td>
                    <td>{{ $train->n_carrozze }}</td>
                    <td>{{ $train->orario }}</td>
                    <td>{{ $train->cancellato }}</td>
                </tr>
            @endforeach
        </table>


    </main>
    <footer></footer>



</body>

</html>
