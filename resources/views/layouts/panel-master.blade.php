<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VAMOS | vamoslac.org</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Ultra' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  {!!Html::style('bower_components/materialize/bin/materialize.css')!!}
  {!!Html::style('bower_components/wow.js/css/libs/animate.css')!!}
  {!!Html::style('styles/main.min.css')!!}
</head>
<body ng-app="dondev2App">
  <main>
    @include('panel.navbar')
    <div class="row">
      <div class=" home">
        @yield('content')
      </div>
    </div>
  </main>
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyDNDvU0Gb3WDYHhGEh3kVBvdIVlAr7A128&libraries=places"></script>
  {!!Html::script('bower_components/jquery/dist/jquery.js')!!}
  {!!Html::script('bower_components/underscore/underscore-min.js')!!}
  {!!Html::script('bower_components/materialize/bin/materialize.js')!!}
  {!!Html::script('bower_components/moment/min/moment-with-locales.min.js')!!}
  {!!Html::script('bower_components/angular/angular.min.js')!!}
  {!!Html::script('bower_components/angular-materialize/src/angular-materialize.js')!!}
  {!!Html::script('bower_components/angular-route/angular-route.min.js')!!}
  {!!Html::script('bower_components/angular-sanitize/angular-sanitize.min.js')!!}
  {!!Html::script('bower_components/angular-cookies/angular-cookies.min.js')!!}
  {!!Html::script('bower_components/wow.js/dist/wow.min.js')!!}
  {!!Html::script('bower_components/angular-translate/angular-translate.js')!!}
  {!!Html::script('bower_components/ngmap/build/scripts/ng-map.min.js')!!}

  {!!Html::script('scripts/translations/es.js')!!}
  {!!Html::script('scripts/translations/br.js')!!}
  {!!Html::script('scripts/translations/en.js')!!}
  
  {!!Html::script('scripts/panel/app.js')!!}
  {!!Html::script('scripts/panel/controllers/nav/nav-controller.js')!!}

  {!!Html::script('scripts/home/services/places.js')!!}
  {!!Html::script('scripts/home/services/copy.js')!!}
  {!!Html::script('scripts/services/geolibs.js')!!}
  {!!Html::script('scripts/services/autocomplete.js')!!}
  <script>
    $(document).ready(function() {
      $('select').material_select();
    });
  </script>

  @yield('js')
  @include('analytics')

</body>

</html>
