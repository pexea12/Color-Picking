<div class="container-fluid" ng-controller="GameOverController">
    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
        <h3>You got {{ scores }} points</h3>
        <br><br>
        <div ng-if="checkHighScore(scores) == true">
            <form action="/color/#/" method="post" role="form">
                <div class="form-group">
                    <label for="name">Your Name: </label>
                    <input type="text" name="name" id="name" placeholder="Your name" ng-model="name" class="form-control">
                </div>
				<div class="form-group" style="display: none">
					<label for="score">Score: </label>
					<input type="number" name="score" id="score" value="{{ scores }}" class="form-control">
				</div>
                
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" value="Submit" class="form-control btn btn-default" ng-click="saveHighScore(name, scores)">
                </div>
                
            </form>
			

        </div>
		
        <a class="btn btn-warning" href="/color/#/">Back</a>
        
        <h4>&copy; Copyright 2015 - pexea12</h4>
    </div>
</div> <!-- container-fluid -->