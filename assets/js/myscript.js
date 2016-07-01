var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope, $http) {
    $http.get("../Services/services_FilmAll").then(function (response) {
        $scope.resultSearch = response.data.Film;
    });
});