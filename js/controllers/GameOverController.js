app.controller('GameOverController', ['$scope', '$http', '$rootScope', function($scope, $http, $rootScope) {
    $scope.scores = $rootScope.scores;
    
    $http.get('highscores.php').success(function(data) {
        $scope.data = data;
		for (var i = 0; i < $scope.data.length - 1; ++i) 
		for (var j = i + 1; j < $scope.data.length; ++j)
			if ($scope.data[i].score < $scope.data[j].score) {
				var temp = $scope.data[i];
				$scope.data[i] = $scope.data[j];
				$scope.data[j] = temp;
			}
			
		for (var i = 0; i < $scope.data.length; ++i)
			$scope.data[i].rank = i + 1;
    });
    
    $scope.checkHighScore = function(scores) {
        var min = $scope.data[0].score;
        for (var i = 0; i < $scope.data.length; ++i) {
            if (min < $scope.data[i].score) min = $scope.data[i].score;
        }
        
        if ($scope.data.length < 20 || $scope.scores > min) {
            return true;
        }
        
        return false;
    };
    
    
}]);