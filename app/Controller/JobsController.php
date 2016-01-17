<?php

class JobsController extends AppController{
	
	public $name = 'Jobs';
	
	public function index(){
		
		//Set Query Options
		$options = array(
				'order' => array('Job.created' => 'desc'),
				'limit' => 5
		);
		
		// Get Job Info
		$jobs = $this->Job->find('all', $options);
		$this->set('jobs', $jobs);
	}
	
	/*
	 * Default Index Method
	 */
}

?>