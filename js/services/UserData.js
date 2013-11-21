app.factory('UserData', function($resource, $q){
    return {

            getTechnician: function(){
                var deferred = $q.defer();
                $resource(BASE_URL+'/ajax/user/gettechnician', {}).
                    query({},
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