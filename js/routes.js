'use strict';
define(['app', 'utils/route-config'], function (app) {
    
return app.config(function($routeProvider){     
        $routeProvider.when('/home',
            {
                templateUrl:'../templates/login/login.html',
                controller: 'LoginController',
                access: {
                        isFree: true
                }
            });
        $routeProvider.when('/mobileconnect',
            {
                templateUrl:'../templates/login/mobileconnect.html',
                controller: 'MobileController',
                access: {
                        isFree: true
                }
            });       
        $routeProvider.when('/register',
            {
                templateUrl:'../templates/login/register.html',
                controller: 'RegisterController',
                access: {
                        isFree: true
                }
            });
        $routeProvider.when('/terms',
            {
                templateUrl:'../templates/page/terms.html',
                access: {
                        isFree: true
                }
            });    
        $routeProvider.when('/contactus',
            {
                templateUrl:'../templates/page/contactus.html',
                access: {
                        isFree: true
                }
            });    
         
        $routeProvider.when('/tutorial',
            {
                templateUrl:'../templates/tutorial/tutorial.html',
                controller: 'TutorialController',
                access: {
                        isFree: false
                }
            });      
            
        $routeProvider.when('/attackjuan',
            {
                templateUrl:'../templates/tutorial/attackjuan.html',
                controller: 'AttackJuanController',
                access: {
                        isFree: false
                }
            });          
                 
            
        $routeProvider.when('/main', {
                
                templateUrl:'../templates/main/main.html',
                controller: 'MainController',
            });    
    
        $routeProvider.when('/profile', {
                templateUrl:'../templates/profile/profile.html',
                controller: 'ProfileController',
            });        
            
         $routeProvider.when('/messages', {
                templateUrl:'../templates/messages/inbox.html',
                controller: 'MessagesController',
            });        
         
         
         $routeProvider.when('/fightlogs', {
                templateUrl:'../templates/fightlogs/fightlogs.html',
                controller: 'FightLogsController',
            });        
               
         
         $routeProvider.when('/invite', {
                templateUrl:'../templates/invite/invite.html',
                controller: 'InviteController',
            });        
               
            
            
//        $routeProvider.when('/enemies',
//            {
//                templateUrl:'../templates/enemies/enemies.html',
//                controller: 'EnemiesController',
//                resolve: {
//                    playerResult: function($q, EnemiesData){
//                        var deferred = $q.defer();
//                        EnemiesData.getAllEnemies()
//                            .then(function(playerResult){deferred.resolve(playerResult);});
//                        return deferred.promise;
//                    }
//                }
//            });     
//            
//            
//        $routeProvider.when('/attack/:nickname',
//            {
//                templateUrl:'../templates/enemies/attackplayer.html',
//                controller: 'AttackPlayerController'
//            });    
            
            
        $routeProvider.when('/logout',
            {
                access: {isFree: true},
                resolve: {
                    logout: function(AuthenticateData){
                        AuthenticateData.logout();
                    }
                }
            });
            
        $routeProvider.otherwise({redirectTo:'/home'});
        
    /*
        $routeProvider.when('/enemies',
            {
                templateUrl:'/js/templates/enemies/enemies.html',
                controller: 'EnemiesController',
                resolve: {
                    playerResult: function($q, enemiesData){
                        var deferred = $q.defer();
                        enemiesData.getAllEnemies()
                            .then(function(playerResult){deferred.resolve(playerResult);});
                        return deferred.promise;
                    }
                }
            });
            
        $routeProvider.when('/attack/:nickname',
            {
                templateUrl:'/js/templates/enemies/attackplayer.html',
                controller: 'AttackPlayerController'
            });    
            
        
            
        $routeProvider.when('/allies',
            {
                templateUrl:'/js/templates/allies/allies.html',
                controller: 'AlliesController',
                resolve: {
                    playerResult: function($q, alliesData){
                        var deferred = $q.defer();
                        alliesData.getAllAllies()
                            .then(function(playerResult){deferred.resolve(playerResult);});
                        return deferred.promise;
                    }
                }
            });    
            
            
        $routeProvider.when('/contact/:nickname',
            {
                templateUrl:'/js/templates/allies/playerdetails.html',
                controller: 'AlliedPlayerController'
            });        
            
         $routeProvider.when('/ranking', {redirectTo:'/ranking/daily'});    
            
            $routeProvider.when('/ranking/daily',
            {
                templateUrl:'/js/templates/ranks/ranking_daily.html',
                controller: 'RankingController',
                resolve: {
                    rankResult: function($q, rankingData){
                        var deferred = $q.defer();
                        rankingData.getRankingToday()
                            .then(function(ranking){deferred.resolve(ranking);});
                        return deferred.promise;
                    }
                }
            });  
            
            
            $routeProvider.when('/ranking/weekly',
            {
                templateUrl:'/js/templates/ranks/ranking_weekly.html',
                controller: 'RankingWeeklyController',
                resolve: {
                    rankResult: function($q, rankingData){
                        var deferred = $q.defer();
                        rankingData.getRankingThisWeek()
                            .then(function(ranking){deferred.resolve(ranking);});
                        return deferred.promise;
                    }
                }
            });  
            
            
            $routeProvider.when('/ranking/alltime',
            {
                templateUrl:'/js/templates/ranks/ranking_alltime.html',
                controller: 'RankingAlltimeController',
                resolve: {
                    rankResult: function($q, rankingData){
                        var deferred = $q.defer();
                        rankingData.getRankingAllTime()
                            .then(function(ranking){deferred.resolve(ranking);});
                        return deferred.promise;
                    }
                }
            });  
            
            //$routeProvider.otherwise({redirectTo:'/enemies'});    
            */
    });
    
   return app; 
});
    
