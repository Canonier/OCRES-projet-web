<?php

App::uses('AppModel', 'Model');

class Workout extends AppModel {

	
	public function findAllId(){
		$fetch = $this->find("all", array("fields" => array("id", "sport", "location_name", "date")));
		foreach ($fetch as $f) {
			$workouts[$f["Workout"]["id"]] = $f["Workout"]["date"]." — ".$f["Workout"]["location_name"]." — ".$f["Workout"]["sport"];
		}

		return $workouts;
	}


}