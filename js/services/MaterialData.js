app.factory('MaterialData', function($resource, $q){
    return {

            addItem: function(request){
                var deferred = $q.defer();
                $resource(BASE_URL+'/ajax/material/additem', {}).
                    save(request,
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            },
            removeItem: function(request){
                var deferred = $q.defer();
                $resource(BASE_URL+'/ajax/material/removeitem', {}).
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