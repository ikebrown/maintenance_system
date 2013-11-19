<?php

class JobrequestForm extends CFormModel
{
	public $name;
        public $department;
	public $date_created;
	public $date_needed;
        public $nature_of_job;
        public $other_specified;
        public $createstatus;

	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('name, department, date_created, date_needed, nature_of_job', 'required'),
                        array('other_specified', 'safe'),
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
			'name'=>'Name',
                    	'department'=>'Department',
                    	'date_created'=>'Date Created',
                    	'date_needed'=>'Date Needed',
                    	'nature_of_job'=>'Nature of Job Request',
                        'other_specified'=>'Others',
                        'createstatus'=>'Status'
		);
	}
        
        public function getNatureOfJob(){
                    return array('CONSTRUCTION'=>'Construction',
                         'INSTALATION'=>'Installation',
                         'REPAIR'=>'Repair',
                         'REPALCEMENT_OF_DEFECTIVE_PARTS'=>'Replacement of Defective Parts',
                         'PREVENTIVE_MAINTENANCE'=>'Preventive Maintenance',
                         'COST_ESTIMATION'=>'Cost Estimation',
                         'OTHERS'=>'Others');
        }

}
