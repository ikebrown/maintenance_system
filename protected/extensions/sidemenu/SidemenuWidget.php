<?php
class SidemenuWidget extends CWidget
{
    

    public function init()
    {
    }
 
    public function run()
    {
        $job = new Jobrequest();
        $trip = new Triprequest();
        
        $user_type = Yii::app()->user->user_type;
        if($user_type == 'CDMO_ADMIN'){            
            $result = $job->getPendingRequestGroupTotal();
            $total = $job->getPendingRequestTotal();
            $trip_total = $trip->getPendingRequestTotal();
            $data = array('result'=>$result, 'total'=>$total, 'trip_total'=>$trip_total);

            $this->render('_cdmo_nav', $data);
        }elseif($user_type == 'REQUESTER'){
            $this->render('_requester_nav', $data);
        }elseif($user_type == 'SUPERADMIN'){            
            $result = $job->getPendingRequestGroupTotal();
            $total = $job->getPendingRequestTotal();
            $trip_total = $trip->getPendingRequestTotal();
            $data = array('result'=>$result, 'total'=>$total, 'trip_total'=>$trip_total);

            $this->render('_superadmin_nav', $data);
        }
    }
    
    
}