'use strict';    
app.config(function($routeProvider){     
        $routeProvider.when('/home',
            {
                templateUrl:'../templates/login/login.html',
                controller: 'LoginController',
                access: {
                        isFree: true
                }
            });
    });