'use_strict';

define(['app'], function (app) {
app.directive('ngMobileprefix', function (MobileData) {
    return {
        require: 'ngModel',
        link: function(scope, ele, attrs, c) {
          scope.$watch(attrs.ngModel, function() {
            if(ele.val().length === 4){
                var prefix = ele.val();
                ele.val(prefix + '-');
                
                MobileData.checkPrefix(prefix).then(function(data){
                    if(data.response !== ""){
                        c.$setValidity('prefix', false);
                    }else{
                        c.$setValidity('prefix', true);
                    }
                });
            }
            
            if(ele.val().length === 8){
                var num = ele.val();
                ele.val(num + '-');
            }
            
          });
        }
    };
});

app.directive('ensureUnique', function (UserData, $rootScope) {
    return {
        require: 'ngModel',
        link: function(scope, ele, attrs, c) { 
          
            scope.$watch(attrs.ngModel, function() {
                if(ele.val().length === 3){
                    UserData.isUsernameUnique(attrs.ensureUnique).then(function(data){
                        if(data.isUnique){
                          c.$setValidity('unique', true);
                        }else{
                          c.$setValidity('unique', false);
                        }
                    });
                }

            });
          
        }
    };
});

app.directive('mobileUnique', function (UserData, $rootScope) {
    return {
        require: 'ngModel',
        link: function(scope, ele, attrs, c) {
            
                scope.$watch(attrs.ngModel, function() {
                    if(ele.val().length === 13){
                        UserData.isMobileVerified(attrs.mobileUnique).then(function(data){
                             c.$setValidity('unique', !data.response);//negate result
                        });
                    }
                });
            
            
        }
    };
});

app.directive('ngButtonPlayer', function ($rootScope, $compile) {
     return {
        restrict: 'A',
        link: function(scope, element, attrs, c) {
            var btnText = "Fight";
            if(attrs.playerType === 'ZOMBIE'){
                btnText = "Bite";
            }

            var button = "";
            if($rootScope.myUserinfo.user_id !== attrs.playerUid){
                button = '<div ng-controller="EnemiesController"><button class="btn btn-success btn-mini" ng-click=attackPlayer(\''+ attrs.playerNickname +'\')>'+btnText+'</div></div>';
                if($rootScope.myUserinfo.player_type === attrs.playerType){
                    button = '<div ng-controller="AlliesController"><button class="btn btn-success btn-mini" ng-click=viewPlayer(\''+ attrs.playerNickname +'\')>Send Message</div></div>';
                }
            }   
            
            angular.element(element).html($compile(button)(scope));
        }
     };
});

app.directive('ngButtonMessage', function ($compile) {
     return {
        restrict: 'A',
        link: function(scope, element, attrs, c) {
            var button = "";
            button = '<a ng-click="reply('+ attrs.senderUid +')" class="btn btn-mini clickable"><i class="fa fa-reply"></i>&nbsp;Reply</a>';
            if(attrs.isRead === '0'){
                button += '&nbsp;<a class="clickable btn btn-mini" ng-click="markAsRead('+ attrs.messageId +')">Mark as read</a>';
            }
            angular.element(element).html($compile(button)(scope));
        }
     };
});

app.directive('ngFightMessage', function ($rootScope, $compile) {
     return {
        restrict: 'A',
        link: function(scope, element, attrs, c) {
            var message = "";
            var action = "";
            var attacker = attrs.attacker;
            if($rootScope.myUserinfo.user_id === attrs.attackerUid){
                attacker = 'You';
            }   
            
            //Action result
            if(attrs.playerType === 'ZOMBIE'){
                if(attrs.isMissed === '0'){
                    action += 'successfully bit';
                }else{
                    action += 'failed to bite';
                }

            }else{
                if(attrs.isMissed === '0'){
                    action += 'successfully shot';
                }else{
                    action += 'failed to shoot';
                }
            }
            
            var result = '';
            var life_count = 1;
            
            var victim = attrs.victim;
            if($rootScope.myUserinfo.user_id === attrs.victimUid){
                
                if(attrs.isMissed === '0'){
                    result = 'lost';
                    
                    if(attrs.isKo === '1'){
                        if(attrs.playerType === 'ZOMBIE'){
                            action = "ate";
                        }else{
                            action = "killed";
                        }
                    }
                }
                
                victim = 'you';
                message = '<small><a href="#"><b>'+ attacker + '</b></a> ' + action + ' ' + victim + '. ';
                message += 'You ' + result + ' ' + life_count + ' life.</small>';
            }else{
                
                if(attrs.isMissed === '1'){
                    result = 'lost';
                }else{
                    result = 'earned';

                    if(attrs.isKo === '1'){
                        life_count = '2';
                    }
                }
                
                message = '<small><b>'+ attacker + '</b> ' + action + ' <a href="#"><b>' + victim + '</b></a>. ';
                message += 'You ' + result + ' ' + life_count + ' life.</small>';
            }

            
            angular.element(element).html($compile(message)(scope));
        }
     };
});


app.directive('ngButtonPlayerLog', function ($rootScope, $compile) {
     return {
        restrict: 'A',
        link: function(scope, element, attrs, c) {
            
            var btnText = "";
            var button = "";
            if($rootScope.myUserinfo.user_id !== attrs.attackerUid){
                btnText = "Bite Back";
                if(attrs.attackerType === 'ZOMBIE'){
                    btnText = "Fight Back";
                }
                button = '<div ng-controller="EnemiesController"><button class="btn btn-success btn-mini" ng-click=attackPlayer(\''+ attrs.attackerNickname +'\')>'+btnText+'</div></div>';
            }else{
                btnText = "Bite Again";
                if(attrs.victimType === 'ZOMBIE'){
                    btnText = "Fight Again";
                }
                button = '<div ng-controller="EnemiesController"><button class="btn btn-success btn-mini" ng-click=attackPlayer(\''+ attrs.victimNickname +'\')>'+btnText+'</div></div>';
            }   
            
            angular.element(element).html($compile(button)(scope));
        }
     };
});

app.directive('ngInviteText', function ($rootScope, $compile) {
     return {
        restrict: 'A',
        link: function(scope, element, attrs, c) {
            
            var invitetxt = "Invite Friends";
            if(attrs.playerType === 'ZOMBIE'){
                invitetxt = "Infect Friends";
            }   
            
            angular.element(element).html($compile('<h3>'+invitetxt+'</h2>')(scope));
        }
     };
});

app.directive('loading', function () {
      return {
        restrict: 'E',
        replace:true,
        template: '<div class="loading"><i class="fa fa-spinner fa-spin"></i></div>',
        link: function (scope, element, attr) {
              scope.$watch('loading', function (val) {
                  if (val){
                      $(element).show();
                  }else{
                      $(element).hide();
                  }
              });
        }
      };
  });
});