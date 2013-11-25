<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
            $job = new Jobrequest();
            $request = $job->getAllJobRequestByCreatestatus('Pending');

            $trip = new Triprequest();
            $dailytrip = $trip->getAllTripRequestByCreatestatus('Pending');
            $this->render('index', array('request'=>$request, 'dailytrip'=>$dailytrip));   

	}
}