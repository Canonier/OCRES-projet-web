<?php

App::uses('AppModel', 'Model');

class Workout extends AppModel {

	public $hasMany = array(
		'Log' => array(
            'className' => 'Log',
            'foreignKey' => 'workout_id'
			)
		);
	public $belongsTo = array(
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'member_id'
			)
		);
	


	public function getRanks (){

		$workouts = $this->find("all");
		$ordered = array();
		foreach ($workouts as $workout){

			$ordered[$workout['Workout']['member_id']]['email'] = $workout['Member']['email'];
			foreach($workout["Log"] as $log){
				if(!isset($ordered[$workout['Workout']['member_id']]['log_average'][$log["log_type"]])) {
					$ordered[$workout['Workout']['member_id']]['log_average'][$log["log_type"]] = $log["log_value"];
				}else{
					$ordered[$workout['Workout']['member_id']]['log_average'][$log["log_type"]] = ($ordered[$workout['Workout']['member_id']]['log_average'][$log["log_type"]] + $log['log_value'])/2;
				}

			}

		}

		return $ordered;
	}



}