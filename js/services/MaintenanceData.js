app.factory('MaintenanceData', function($resource, $q){
    return {
            
            removeCheck: function(id){
                var deferred = $q.defer();
                $resource(BASE_URL+'ajax/maintenance/removecheck', {}).
                    save({id:id},
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            },
            
    };
});