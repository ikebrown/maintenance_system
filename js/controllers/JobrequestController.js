'use strict';

app.controller('JobrequestController',
    function JobrequestController($scope, JobrequestData){
        $scope.updateJobrequest = function(job_id, status){
            var request = {job_id:job_id,status:status};
            JobrequestData.updateJobrequest(request).then(function(data){
                console.log(data);
                if(data.response){
                    location.reload();
                }
            });
        };
    }
);

    
