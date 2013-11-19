define(['app'], function (app) {
app.factory('UserData', function($resource, $q){
    return {
            getMyDetails: function(){
                var deferred = $q.defer();
                $resource('/api/user/getmydetails/', {}).
                    get({},
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            },
            
            getUserLargePhoto: function(){
                var deferred = $q.defer();
                $resource('/api/user/getuserlargephoto/', {}).
                    get({},
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            },
            
            getUserInfo: function(){
                var deferred = $q.defer();
                $resource('/api/user', {}).
                    get({},
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            },
            
            getVerificationCodeByMobile: function(mobile){
                var deferred = $q.defer();
                $resource('/api/user/getverificationcodebymobile/mobile/:mobile', {'mobile':'@id'}).
                    get({mobile:mobile},
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            },
            
            getUserDetailsByMobileVcode: function(response){
                var deferred = $q.defer();
                $resource('/api/user/getuserdetailsbymobileverificationcode/mobile/:mobile_number/vcode/:verification_code', {'mobile_number':'@id'}).
                    get({mobile_number:response.mobile_number,verification_code:response.verification_code},
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            },
            
            isMobileVerified: function(mobile){
                var deferred = $q.defer();
                $resource('/api/user/ismobileverified/mobile/:mobile_number', {'mobile_number':'@id'}).
                    get({mobile_number:mobile},
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            },
            
            
            isUsernameUnique: function(username){
                var deferred = $q.defer();
                $resource('/api/user/isusernameunique/username/:username', {'username':'@id'}).
                    get({username:username},
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            },
            
            updateDetails: function(user){
                var deferred = $q.defer();
                $resource('/api/user/updatedetails', {}).
                    save(user,
                    function(data, status, headers, config) {
                        deferred.resolve(data);
                    },
                    function(data, status, headers, config) {                  
                      deferred.reject(status);
                    });
                    
                    return deferred.promise;
            },
            
            
            updateMobile: function(mobile){
                var deferred = $q.defer();
                $resource('/api/user/updatemobile', {}).
                    save({mobile:mobile},
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
});