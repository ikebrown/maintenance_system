<?php

class DailytripCompletionForm extends CFormModel
{
	public $trip_id;
        public $departure_time;
        public $departure_guard;
        public $arrival_time;
        public $arrival_guard;
        
	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('trip_id, departure_time, departure_guard, arrival_time, arrival_guard', 'required')
                        
		);
	}

        
	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'trip_id'=>'Id',
                    	'departure_time'=>'Departure Time',
                    	'departure_guard'=>'Departure Guard',
                    	'arrival_time'=>'Arrival Time',
                    	'arrival_guard'=>'Arrival Guard'
		);
	}
        
}
