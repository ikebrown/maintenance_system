'use strict';

app.controller('TriprequestController',
    function TriprequestController($scope, TriprequestData){
        $scope.updateTriprequest = function(trip_id, status){
            var request = {trip_id:trip_id,status:status};
            TriprequestData.updateTriprequest(request).then(function(data){
                
                if(data.response){
                    location.reload();
                }
            });
        };
    }
);

    
