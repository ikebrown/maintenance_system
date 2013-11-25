<?php
class SidemenuWidget extends CWidget
{
    

    public function init()
    {
    }
 
    public function run()
    {
        $job = new Jobrequest();
        $result = $job->getPendingRequestGroupTotal();
        $total = $job->getPendingRequestTotal();
        
        $data = array('result'=>$result, 'total'=>$total);
        
        $user_type = Yii::app()->user->user_type;
        if($user_type == 'CDMO_ADMIN'){
            $this->render('_cdmo_nav', $data);
        }elseif($user_type == 'REQUESTER'){
            $this->render('_requester_nav', $data);
        }elseif($user_type == 'SUPERADMIN'){
            $this->render('_superadmin_nav', $data);
        }
    }
    
    
}