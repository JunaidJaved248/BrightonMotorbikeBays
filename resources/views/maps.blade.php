<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Brighton Motorbike Bays</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    </head>
    <body>

      <div id="map"></div>
      <script>

        var bays = [];
        var bounds = {
          north: {{$bounds['maxLat']}},
          east: {{$bounds['maxLng']}},
          south: {{$bounds['minLat']}},
          west: {{$bounds['minLng']}},
        }

        @foreach ($bays as $bay)
          bay = {
            streetname:"{{ $bay->street_name }}",
            latitude:"{{ $bay->latitude }}",
            longitude:"{{ $bay->longitude }}"
          };
          bays.push(bay);
        @endforeach
      </script>
      <script type="text/javascript" src="{{ URL::asset('js/map.js') }}"></script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBN6WsRsmwEByiOdHOgQY0u9nW75KqPrOc&callback=initMap">
      </script>
    </body>
</html>
