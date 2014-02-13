'use strict';

app.controller('MaintenanceController',
    function MaintenanceController($scope, $modal, UserData, MaintenanceData){
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
        
        
        $scope.removeCheck = function(act_id, mid, month){
            var ans = confirm('Are you sure you want to remove this?');
            if(ans){
                MaintenanceData.removeCheck(act_id, mid, month).then(function(data){
                   alert(data.data);
                   location.reload();
                });
            }
          
        };
     
    }
);

    
