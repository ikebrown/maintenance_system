'use_strict';

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