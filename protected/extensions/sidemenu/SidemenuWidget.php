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
        $message_count = $messages = Messages::model()->count('receipient_uid=:user_id AND is_read = 0', array(':user_id'=>Yii::app()->user->id));
        
        
        if(in_array($user_type, array('CDMO', 'LMO', 'DOIT'))){            
            $result = $job->getPendingRequestGroupTotal($user_type);
            $total = $job->getPendingRequestTotal($user_type);
            $trip_total = $trip->getPendingRequestTotal();
            $data = array('result'=>$result, 'total'=>$total, 'trip_total'=>$trip_total, 'message_count'=>$message_count);

            if($user_type == 'CDMO'){
                $this->render('_cdmo_nav', $data);
            }else{
                $this->render('_admin_nav', $data);
            }
        }elseif(in_array($user_type, array('CDMO_TECH', 'LMO_TECH', 'DOIT_TECH'))){            
            $data = array('message_count'=>$message_count);
            $this->render('_technician_nav', $data);
        }elseif($user_type == 'REQUESTER'){
            $data = array('message_count'=>$message_count);
            $this->render('_requester_nav', $data);
        }elseif($user_type == 'WEBADMIN'){            
            $result = $job->getPendingRequestGroupTotal();
            $total = $job->getPendingRequestTotal();
            $trip_total = $trip->getPendingRequestTotal();
            $data = array('result'=>$result, 'total'=>$total, 'trip_total'=>$trip_total, 'message_count'=>$message_count);

            $this->render('_webadmin_nav', $data);
        }
    }
    
    
}