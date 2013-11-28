'use strict';

app.controller('MaterialController',
    function MaterialController($scope, MaterialData, JobrequestActionData, $compile){
        $scope.items = {
            materials:{}
        };
        
        $scope.checkValue = function(id, total_quantity){
            var quantity = angular.element('#material_'+id).val();
            
            if(quantity > total_quantity){
                angular.element('#material_'+id).val(total_quantity);
                alert('Not enough materials on-stock.');
            }else if(quantity <= 0){
                angular.element('#material_'+id).val(1);
                alert('Minimum request is 1.');
            }
        };
        
        $scope.reloadMaterialNeeded = function(){
            var values = $scope.items.materials;
            var html = "";
            angular.element('#materials_needed').html('');
            angular.forEach(values, function(value, key){
                if(value !== null){
                    html = '<div class="list-group">'+
                              '<button type="button" class="close" aria-hidden="true" ng-click="deleteItem('+key+')">&times;</button>'+
                              '<h4 class="list-group-item-heading">'+value.material_name+'</h4>'+
                              '<p class="list-group-item-text">Quantity: '+value.quantity+'</p>'+
                          '</div>';                            
                   angular.element('#materials_needed').prepend($compile(html)($scope));
                }
            });
        };
        
        $scope.addItem = function(id, job_id){
            var quantity = angular.element('#material_'+id).val();
            console.log(quantity);
            if(quantity !== "" && quantity !== "0"){
                MaterialData.getItem(id).then(function(response){
                    $scope.items.materials[id] = {
                                                    id:response.data.mat_id,
                                                    material_name:response.data.material_name,
                                                    quantity:quantity,
                                                    job_id:job_id
                                                };                         
                    
                    $scope.reloadMaterialNeeded();
                    
                });
                
            }else{
                alert('Please input a valid quantity.');
            }
        };
        
        $scope.deleteItem = function(id){
            $scope.items.materials[id] = null;
            $scope.reloadMaterialNeeded();
        };
        
           
        $scope.markActionDone = function(id){
            var request = {id:id,status:'COMPLETED'};
            JobrequestActionData.updateJobrequestAction(request).then(function(data){
                console.log(data);
                if(data.response){
                    var html = '<small><a href="#" class="badge" ng-click="markActionPending('+id+')">Completed</a></small>';
                    angular.element('#jobstatus_'+id).html($compile(html)($scope));
                }
            });
        };
        
        $scope.markActionPending = function(id){
            var request = {id:id,status:'PENDING'};
            JobrequestActionData.updateJobrequestAction(request).then(function(data){
                if(data.response){
                    var html = '<small><a href="#" ng-click="markActionDone('+id+')">Mark as Done</a></small>';
                    angular.element('#jobstatus_'+id).html($compile(html)($scope));
                }
            });
        };
        
        $scope.saveWorkOrder = function(){
            var request = {
                job_id:$scope.job_id,
                materials:$scope.items.materials
            };
            
            MaterialData.saveMaterial(request).then(function(response){
                alert('Work order Updated!');
                location.reload();
            });
        };
    }
);

    
