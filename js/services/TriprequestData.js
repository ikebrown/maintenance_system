app.factory('TriprequestData', function($resource, $q){
    return {

            updateTriprequest: function(request){
                var deferred = $q.defer();
                $resource(BASE_URL+'/ajax/triprequest/updatetriprequest', {}).
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