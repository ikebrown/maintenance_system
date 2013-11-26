'use strict';

app.controller('TriprequestController',
    function TriprequestController($scope, TriprequestData){
        $scope.updateTriprequest = function(trip_id, status){
            var request = {trip_id:trip_id,status:status};
            console.log(request);
            TriprequestData.updateTriprequest(request).then(function(data){
                console.log(data);
                if(data.response){
                    location.reload();
                }
            });
        };
    }
);

    
