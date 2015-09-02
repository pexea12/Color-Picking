var app = angular.module('app', ['ngRoute']);


app.config(['$routeProvider', function($routeProvider) {
    $routeProvider
    .when('/', {
        templateUrl: 'views/intro.php'
    })
    .when('/game', {
        templateUrl: 'views/game.html',
        controller: 'TableController'
    })
    .when('/about', {
        templateUrl: 'views/about.html'
    })
    .when('/game_over', {
        templateUrl: 'views/game_over.php',
        controller: 'GameOverController'
    })
    .when('/highscores', {
        templateUrl: 'views/highscores.html',
        controller: 'HighScoresController'
    })    
    .otherwise({
        redirectTo: '/'
    });
}]);

	