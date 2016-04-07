<?php

App::uses('AppModel', 'Model');

class Message extends AppModel {

	public $belongsTo = array(
		'Member1' => array(
			'className' => 'Member',
			'foreignKey' => 'member_id'
		),
		'Member2' => array(
			'className' => 'Member',
			'foreignKey' => 'member2_id'
		)
	);

}