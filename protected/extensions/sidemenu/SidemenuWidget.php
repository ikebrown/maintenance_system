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
        if(in_array($user_type, array('CDMO', 'LMO', 'DOIT'))){            
            $result = $job->getPendingRequestGroupTotal($user_type);
            $total = $job->getPendingRequestTotal($user_type);
            $trip_total = $trip->getPendingRequestTotal();
            $data = array('result'=>$result, 'total'=>$total, 'trip_total'=>$trip_total);

            if($user_type == 'CDMO'){
                $this->render('_cdmo_nav', $data);
            }else{
                $this->render('_admin_nav', $data);
            }
        }elseif($user_type == 'REQUESTER'){
            $this->render('_requester_nav');
        }elseif($user_type == 'SUPERADMIN'){            
            $result = $job->getPendingRequestGroupTotal();
            $total = $job->getPendingRequestTotal();
            $trip_total = $trip->getPendingRequestTotal();
            $data = array('result'=>$result, 'total'=>$total, 'trip_total'=>$trip_total);

            $this->render('_superadmin_nav', $data);
        }
    }
    
    
}