'use strict';
define(['angular', 'utils/route-config'], function (angular, routeConfig, lazyDirectives, $location) {

  return angular.module('app', ['ui.bootstrap','ngResource'])
    .config(function ($compileProvider, $controllerProvider, $locationProvider) {
        routeConfig.setCompileProvider($compileProvider);
        routeConfig.setControllerProvider($controllerProvider);
    })
    .run(function ($rootScope) {
        
        
    })
    
    
});