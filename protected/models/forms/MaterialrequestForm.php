<?php

class MaterialrequestForm extends CFormModel
{
        public $job_id;
        public $material_id;
        public $material;
        public $quantity;
	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('job_id, material_id, material', 'required'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
                        'job_id' => 'Job',
			'material_id'=>'Material',
                    	'quantity'=>'Quantity',
		);
	}

}
