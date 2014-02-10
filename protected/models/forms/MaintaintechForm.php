<?php

class MaintaintechForm extends CFormModel
{
        public $mid;
        public $assigned_personnel_uid;

	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('mid, assigned_personnel_uid', 'required'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
                        'mid'=>'Preventive Maintenance',
			'assigned_personnel_uid'=>'Assigned Personnel',
		);
	}

}
