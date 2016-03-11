<?php

App::uses('AppModel', 'Model');

class Device extends AppModel {

	public $displayField = 'serial';
	public $belongsTo = array(
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'member_id',
			'conditions' => '',
			'fields' => 'Member.email',
			'order' => ''
		)
	);

	public function findAllId(){
		$fetch = $this->find("all", array("fields" => array("id", "serial")));
		foreach ($fetch as $f) {
			$devices[$f["Device"]["id"]] = $f["Device"]["serial"];
		}

		return $devices;
	}

	public function addDevice($compte, $appareil, $description){
		$device = array(
				"member_id" => $compte,
				"serial" => $appareil,
				"description" => $description,
				"trusted" => 0
			);

		$this->save($device);

		return $this->find('all', array('fields' => "id", "limit" => 1, "order" => array("id" => "DESC")));
	}

}