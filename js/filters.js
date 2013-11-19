'use_strict';

define(['app'], function (app) {
app.filter('duration', function(){
   return function(duration){
       
   } 
});


app.filter('imgDefault', function(){
   return function(player){
       if(player){
           
            if(player.photo_url !== ''){
                return player.photo_url;
            }

            if(player.player_type === 'ZOMBIE'){
                if(player.gender === 'f'){
                    return "/images/default/AVATAR_ZOMBIE_FEMALE.jpg";
                }else{
                    return "/images/default/AVATAR_ZOMBIE_MALE.jpg";
                }

            }else{
                if(player.gender === 'f'){
                    return "/images/default/AVATAR_HUNTER_FEMALE.jpg";
                }else{
                    
                    return "/images/default/AVATAR_HUNTER_MALE.jpg";
                }
            }
       }
   } 
});

app.filter('genderDefault', function(){
   return function(gender){
       
       if(gender){
           return gender;
       }else{
           return "m";
       }
   } 
});

app.filter('playerTypeImage', function(){
   return function(gender, player_type, isEnable){
       
       if(player_type === 'zombie'){
           return "";
       }
       
       
   } 
});

});