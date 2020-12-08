angular.module('dondeDataVizApp').controller('countryListController',
  function($timeout, $scope, $rootScope, $http, $translate, $cookies) {

    $rootScope.selectedLanguage;

    try {
      var userLang = navigator.language || navigator.userLanguage; // es-AR
      var userLang = userLang.split('-')[0]; // es
      if (userLang !== 'undefined' && userLang.length > 0 && userLang != null && (!localStorage.selectedByUser)) {
        if (userLang == 'pt') userLang = 'br';
        localStorage.setItem("lang", userLang);
        localStorage.setItem("selectedByUser", false);
        $translate.use(userLang);
        $rootScope.selectedLanguage = userLang;
      } else if (typeof localStorage.lang !== "undefined") {

        $translate.use(localStorage.getItem("lang"));
        $rootScope.selectedLanguage = localStorage.lang;
      } else {
        localStorage.setItem("lang", 'es');
        $translate.use('es');
        $rootScope.selectedLanguage = 'es';
        $rootScope.changeLanguage();
      }
      $http.get('changelang/' + localStorage.lang)
      .then(
        function(response) {

          if (response.statusText == 'OK') {

          } else {
            Materialize.toast('Intenta nuevamente mas tarde.', 5000);
          }
        },
        function(response) {
          Materialize.toast('Intenta nuevamente mas tarde.', 5000);
        }
        );
    } catch (err) {

      if (typeof(err) !== "undefined") {
        localStorage.setItem("lang", "es");
      }
    }

    $rootScope.selectedLanguageFunc = function(lang) {

      if ($rootScope.selectedLanguage == lang) {

        $('language1').material_select();
        return true;
      } else {

        return false;
      }
    }

    $rootScope.changeLanguage = function() {

      localStorage.setItem("lang", $rootScope.selectedLanguage);
      localStorage.setItem("selectedByUser", true);
      $translate.use($rootScope.selectedLanguage);
      $cookies.put('lang', $rootScope.selectedLanguage);
      $http.get('changelang/' + $rootScope.selectedLanguage)
      .then(
        function(response) {

          if (response.statusText == 'OK') {

          } else {
            Materialize.toast('Intenta nuevamente mas tarde.', 5000);
          }
        },
        function(response) {
          Materialize.toast('Intenta nuevamente mas tarde.', 5000);
        });

      return;
    }

    $timeout(
      function() {
        $rootScope.moveMapTo = {
          latitude: -12.382928338487396,
          longitude: -79.27734375,
          zoom: 3
        };
      }, 500);

    $rootScope.places = [];
    $rootScope.navigating = true;
    $scope.currentMarker = undefined;

    $rootScope.main = true;
    $rootScope.navBar = ""

  });
