app.factory('JobrequestData', function($resource, $q){
    return {

            updateJobrequest: function(request){
                var deferred = $q.defer();
                $resource(BASE_URL+'/ajax/jobrequest/updatejobrequest', {}).
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