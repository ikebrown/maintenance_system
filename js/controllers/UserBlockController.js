'use strict';

define(['app'], function (app) {
app.controller('UserBlockController',
    function UserBlockController($scope, UserBlockData){
           
        $scope.playerDetails.then(function(data){
            UserBlockData.isblock(data).then(function(data2){
                $scope.messageSending = data2.response;
            });

        });
        
        $scope.messageBlocking = function(playerDetails){
            
            if(!$scope.messageSending){
                UserBlockData.block(playerDetails);    
            }else{
                UserBlockData.unblock(playerDetails);
            }
        }
    }
);
});