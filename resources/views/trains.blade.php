<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
    @inject('utils', 'App\Utils\Utils')

</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">azienda</th>
                            <th scope="col">stazione di arrivo</th>
                            <th scope="col">stazione di partenza</th>
                            <th scope="col">orario di partenza</th>
                            <th scope="col">orario di arrivo</th>
                            <th scope="col">codice treno</th>
                            <th scope="col">numero carrozze</th>
                            <th scope="col">in orario</th>
                            <th scope="col">cancellato</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($trains as $key => $train)
                          <tr>
                            <td>{{$train->azienda}}</td>
                            <td>{{$train->stazione_di_arrivo}}</td>
                            <td>{{$train->stazione_di_partenza}}</td>
                            <td>{{$train->orario_di_partenza}}</td>
                            <td>{{$train->orario_di_arrivo}}</td>
                            <td>{{$train->codice_treno}}</td>
                            <td>{{$train->numero_carrozze}}</td>
                            <td>{{ $utils->trainbool($train->in_orario) }}</td>
                            <td>{{ $utils->trainbool($train->cancellato) }}</td>
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>