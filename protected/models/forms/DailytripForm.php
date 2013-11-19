<?php

class DailytripForm extends CFormModel
{
	public $name;
        public $department;
	public $date_created;
	public $date_use_from;
        public $date_use_to;
        public $car;
        public $plate_no;
        public $purpose;
        public $et_departure;
        public $et_arrival;
        

	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('name, department, date_created, date_use_from, date_use_to, car, purpose, et_departure, et_arrival', 'required')
                        
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
                    	'date_use_from'=>'From',
                    	'date_use_to'=>'To',
                        'car'=>'Vehicle',
                        'plate_no'=>'Plate No.',
                        'et_departure'=>'ET Departure',
                        'et_arrival'=>'ET Arrival',
		);
	}
        
}
