<?php

class JobrequestForm extends CFormModel
{
        public $job_no;
	public $name;
        public $department;
	public $date_created;
	public $date_needed;
        public $nature_of_job;
        public $other_specified;
        public $createstatus;
//        public $request_type;
        public $materials_needed;
        public $reason;
        public $status_reason;

	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('name, department, date_created, nature_of_job, materials_needed, reason', 'required'),
                        array('other_specified, status_reason', 'safe'),
                        array('nature_of_job', 'checkOthers'),
		);
	}

        public function checkOthers(){
            if(!$this->hasErrors())
            {
                if($this->nature_of_job == 'OTHERS'){
                    if($this->other_specified == ''){
                        $this->addError('nature_of_job','Please specify other nature of job.');
                    }
                }

            }
            
            
        }
        
	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
                        'job_no'=>'Job No.',
			'name'=>'Name',
                    	'department'=>'Department',
                    	'date_created'=>'Date Created',
                    	'date_needed'=>'Date Needed',
                    	'nature_of_job'=>'Nature of Job Request',
                        'other_specified'=>'Others',
                        'createstatus'=>'Status',
//                        'request_type'=>'Request Type',
                        'materials_needed'=>'Materials Needed',
                        'reason'=>'Reason',
                        'status_reason'=>'Status Reason',
                        
		);
	}
        
        public function getNatureOfJob(){
                    return array('CONSTRUCTION'=>'Construction',
                         'INSTALLATION'=>'Installation',
                         'REPAIR'=>'Repair',
                         'REPLACEMENT_OF_DEFECTIVE_PARTS'=>'Replacement of Defective Parts',
                         'PREVENTIVE_MAINTENANCE'=>'Preventive Maintenance',
                         'COST_ESTIMATION'=>'Cost Estimation',
                         'OTHERS'=>'Others');
        }
        
        public function getRequestType(){
            $model = new Jobrequest();
            return $model->getRequestType();
        }

}
