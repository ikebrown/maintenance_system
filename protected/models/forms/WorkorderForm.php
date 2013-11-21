<?php

class WorkorderForm extends CFormModel
{
	public $name;
        public $department;
	public $date_created;
	public $date_needed;
        public $nature_of_job;
        public $personnel_name;
        public $personnel_assigned_uid;
        public $status;
        

	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('name, department, date_created, date_needed, nature_of_job, personnel_assigned_uid, status', 'required'),
		);
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
                        'personnel_assigned_uid'=>'Assigned Personnel',
                        'status'=>'Status'
		);
	}

}
