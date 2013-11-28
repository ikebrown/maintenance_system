app.factory('JobrequestActionData', function($resource, $q){
    return {

            updateJobrequestAction: function(request){
                var deferred = $q.defer();
                $resource(BASE_URL+'/ajax/jobrequestaction/updatejobrequestaction', {}).
                    save(request,
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            }
    };
});