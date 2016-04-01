<?php 

App::uses('AppController', 'Controller');

/**
 * Main controller of our small application
 *
 * @author Orazio LOCCHI
 */
class ApiController extends AppController
{

	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();
	}

    public $components = array('RequestHandler');
	public $uses = array('Device', 'Log', 'Workout', 'Member');

	public function workoutparameters($object = null, $workout = null){
		// default answer
		$code = "500";
		$message = "Resource not found";

		// Check if object is trusted.
		if($object && $this->devicestrusted($object)['trusted']){

			// On recherche les logs du workout 3 pour le user en session
			$logs = $this->Log->find('all', array('conditions' => array('workout_id' => $workout, 'member_id' => $this->devicestrusted($object)['member_id'])));
			if(!empty($logs)){
				$code = "200";
				$message = $logs; // enlève le array "Log"
			}
		}else{
			$code = "401";
			$message = 'Object not allowed.';
		}
		// on envoit à l'affichage
		$this->show($code, $message);


	}


	public function getsummary($object = null){
		// default answer
		$code = "500";
		$message = "Resource not found";

		// Check if object is trusted.
		if($this->devicestrusted($object)['trusted']){

			$workouts = $this->Workout->find('all', array('conditions' => array('member_id' => $this->devicestrusted($object)['member_id']), 'limit' => 3));
			if(!empty($workouts)){
				// traitment
				foreach ($workouts as $workout) {
					unset($workout[1]);
				}
				// result
				$code = "200";
				$message = $workouts; // enlève le array "Log"
			}
		}else{
			$code = "401";
			$message = 'Object not allowed.';
		}
		// on envoit à l'affichage
		$this->show($code, $message);

	}

	public function registerdevice($email, $serial, $description){
		// default answer
		$code = "500";
		$message = "Resource not found";
		// do stuff
		$device = $this->Device->findBySerial($serial);
		if(isset($device['Device']['id'])){
			$code = "300";
			$message = "Device allready add for an other player.";
		}
		elseif(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($serial) && !empty($description)){
			$device = array(
				'member_id' => $this->Member->findByEmail($email)['Member']['id'],
				'serial' => $serial,
				'description' => $description,
				'trusted' => 0
				);
			$this->Device->save($device);
			$code = "200";
			$message = $this->Device->find('first', array('limit' => 1, 'order' => "id DESC"));
		}else{
			$code = "401";
			$message = "Missing argument, see below : ...registerdevice/email@personnal.my/serial/description";
		}
		// on envoit à l'affichage
		$this->show($code, $message);

	}


	public function show($code, $message){

		// pr($elements);
		if($code == 200){
			foreach ($message as $elementKey => $elementVal) {
				if(count($elementVal) == 1 ){
					$return[] = $elementVal[ array_keys( $elementVal )[0] ];
				}
				else{
					$return[] = $elementVal;
				}
			}
		}else{
			$return = $message;
		}

		$this->set(array(
            'code' => $code,
            'message' => $return,
            '_serialize' => array('code', 'message')
        ));
	}


	public function devicestrusted($serial){
		// Check if object is trusted.
		$device = $this->Device->findBySerial($serial);
		if($device && $device['Device']['trusted']){
			return array('trusted' => true, 'member_id' => $device['Device']['member_id']);
		}else{
			return array('trusted' => false);
		}
	}


}

?>