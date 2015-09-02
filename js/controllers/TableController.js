'use strict';

app.controller('TableController', function($location, $scope, $rootScope, RandomFactory, ColorService) {
    $scope.numbers = [0, 1, 2];
    $scope.scores = 0;
    $scope.random = RandomFactory.random($scope.numbers.length);
    $scope.gap = 60;
    $scope.color = ColorService.createColor();
    
    $scope.colorSquare = function(i, j) {
        var colorStyle = "rgb(" + $scope.color.red + ", " + $scope.color.green + ", ";
        if (i == $scope.random.row && j == $scope.random.col)
            colorStyle += ($scope.color.blue - $scope.gap) + ")";
        else colorStyle += $scope.color.blue + ")";
        
        return colorStyle;
    }
    
    $scope.check = function(i, j) {
        if (i == $scope.random.row && j == $scope.random.col ) {
            $scope.scores += 1; 
            if ($scope.gap > 0) $scope.gap -= 1;
            if ($scope.numbers.length < 20) {
                var length = $scope.numbers.length;
                var addMore = $scope.numbers[length - 1] + 1;
                $scope.numbers.push(addMore);
            }
            $scope.random = RandomFactory.random($scope.numbers.length);
            $scope.color = ColorService.createColor();
        }
        else {
            $rootScope.scores = $scope.scores;
            $location.path('/game_over');
        }
    };
});
