
		<?php
			if (isset($_POST['name']) && isset($_POST['score'])) {
				$mysql = new mysqli("mysql13.000webhost.com", "a8596221_pexea12", "pexea12", "a8596221_pexea12");
				
				$name = $_POST['name'];
				$score = $_POST['score'];
	
				
				$query = "INSERT INTO highscores VALUES('', '$name', '$score')";
				$mysql->query($query);
			}
		?>
<!DOCTYPE html>
<html>
<head>
    <title>Color Picking</title>
    <meta name="author" content="pexea12">
    <meta charset="utf-8">
    <meta name="viewport" content="device=device-width, initial-scale=1.0">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    
    <!-- Script -->
    <script src="js/bootstrap/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    
</head>
<body ng-app="app">
    <header>
        <br>
        <h2>Color Picking</h2>
        <br>
    </header>
    
    <div id="main">
       <div ng-view></div>
    </div> <!-- main -->
    
    <!-- AngularJS -->
    <script src="js/vendor/angular.min.js"></script>
    <script src="js/vendor/angular-route.js"></script>
    <script src="js/app.js"></script>
    
    <!-- Services -->
    <script src="js/services/ColorService.js"></script>
    
    <!-- Factories -->
    <script src="js/factories/RandomFactory.js"></script>
    
    <!-- Controllers -->
    <script src="js/controllers/TableController.js"></script>
    <script src="js/controllers/GameOverController.js"></script>
    <script src="js/controllers/HighScoresController.js"></script>
    
</body>
</html>