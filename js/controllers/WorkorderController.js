'use strict';

app.controller('WorkorderController',
    function WorkorderController($scope, $modal, UserData){
        $scope.items = {
            uid:{},
            technician:{}
        };
        
        UserData.getTechnician().then(function(data){
           $scope.response = data;
        });
        
        $scope.showTechnician = function(item){
            if($scope.items.uid[item.uid]){
                $scope.items.technician[item.uid] = item;
            }else{
                $scope.items.technician[item.uid] = {};
            }
            
            var values = $scope.items.uid;
            var uid = "";
            angular.forEach(values, function(value, key){
                if(value){
                    uid += key + '|';
                }
            }, uid);
            
            $scope.assigned_personnel_uid = uid;
        };
     
    }
);

    
