app.factory('MaterialData', function($resource, $q){
    return {
            
            getItem: function(id){
                var deferred = $q.defer();
                $resource(BASE_URL+'ajax/material/getitem?id=:id', {'id':'@id'}).
                    get({id:id},
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            },
            
            saveMaterial: function(request){
                var deferred = $q.defer();
                $resource(BASE_URL+'ajax/material/savejobrequestmaterials', {}).
                    save(request,
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