app.service('ColorService', function() {
    this.createColor = function() {
        return {
            red: Math.floor(1000 * Math.random()) % 256,
            green: Math.floor(1000 * Math.random()) % 256,
            blue: Math.floor(1000 * Math.random()) % 236 + 60
        }
    }
});