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
		$output = array('sports' => array(), 'membres' => array());

		foreach ($workouts as $workout) {

			foreach ($workout['Log'] as $log) {
				// Si le log_type à déjà une valeur, on fait la moyenne.
				if(!empty($output['membres'][$workout['Member']['email']][$workout['Workout']['sport']][$log['log_type']])){ 
					$output['membres'][$workout['Member']['email']][$workout['Workout']['sport']][$log['log_type']] = ( $output['membres'][$workout['Member']['email']][$workout['Workout']['sport']][$log['log_type']] + $log['log_value']) / 2;
				}else{ // Sinon on insert la valeur.
					$output['membres'][$workout['Member']['email']][$workout['Workout']['sport']][$log['log_type']] = $log['log_value']; 
				}

				// On enregistre le sport ailleurs
				if(!in_array($workout['Workout']['sport'], $output['sports']))
					$output['sports'][] = $workout['Workout']['sport'];
			}
		}

		return $output;
	}



}