<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Trainlean</title>

    @vite('resources/js/app.js')
  </head>

  <body>
    <div class="container text-center my-5">
      <h1 class="text-danger fw-bold">Trainlean</h1>
      <table class="border w-100 my-5">
        <thead>
          <tr>
            <th>Codice Treno</th>
            <th>Azienda</th>
            <th>Tipo</th>
            <th>Carrozze</th>
            <th>Luogo Partenza</th>
            <th>Data Partenza</th>
            <th>Luogo Arrivo</th>
            <th>Data Arrivo</th>
            <th>Cambi</th>
            <th>Ritardo</th>
            <th>Cancellato</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($trains as $train)  
          <tr>
            <td>{{ $train->cod_train }}</td>
            <td>{{ $train->agency }}</td>
            <td>{{ $train->type }}</td>
            <td>{{ $train->number_carrieges }}</td>
            <td>{{ $train->departe_station }}</td>
            <td>{{ $train->departe_date }}</td>
            <td>{{ $train->arrive_station }}</td>
            <td>{{ $train->arrive_date }}</td>
            <td>{{ $train->changes }}</td>
            <td>{{ $train->delay . '"' }}</td>
            <td>{{ $train->canceled ? 'Si' : 'No' }}</td>
          </tr>
          @empty
          @endforelse
        </tbody>
      </table>
    </div>
  </body>

</html>
