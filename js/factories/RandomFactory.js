app.factory('RandomFactory', function() {
    return {
        random: function(number) {
            return {
                row: Math.floor(1000 * Math.random()) % number,
                col: Math.floor(1000 * Math.random()) % number
            }
        }
    }
});