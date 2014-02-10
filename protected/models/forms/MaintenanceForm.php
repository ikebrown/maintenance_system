<?php

class MaintenanceForm extends CFormModel
{
        public $uid;
        public $act_id;
        public $remarks;
        public $act_month;

	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('uid, act_id, act_month', 'required'),
                        array('remarks', 'safe'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
                        'uid'=>'Assigned Technician',
			'act_id'=>'Activity',
                    	'remarks'=>'Remarks',
                        'act_month'=>'Month'
		);
	}

}
