<?php

class WorkorderForm extends CFormModel
{
        public $job_id;
        public $job_no;
	public $name;
        public $department;
	public $date_created;
	public $date_needed;
        public $nature_of_job;
        public $personnel_name;
        public $personnel_assigned_uid;
        public $createstatus;
        public $reason;
        public $materials_needed;
        
        

	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('name, department, date_created, nature_of_job, personnel_assigned_uid, createstatus', 'required'),
		);
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
                        'personnel_assigned_uid'=>'Assigned Personnel',
                        'createstatus'=>'Status',
                        'materials_needed' => 'Job Order Details'
		);
	}

}
