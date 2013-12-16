<?php

class MessageForm extends CFormModel
{
        public $name;
	public $message;
        public $receipient_uid;

	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('message, receipient_uid', 'required')
                        
		);
	}

        
	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'name'=>'Name',
                    	'message'=>'Message',
                        'receipient_uid' => 'Receipient'
		);
	}
        
}
