<?php 

App::uses('AppController', 'Controller');

/**
 * Main controller of our small application
 *
 * @author Orazio LOCCHI
 */
class AccountsController extends AppController
{

    /**
     * index method : first page
     *
     * @return void
     */
    
    public $components = array('Session');
    public $uses = array('Member', 'Workout', 'Device', 'Log', 'Bond');


// Index
    public function index()
    {
    	$this->set('myname', "Toto!!!");
    }

// Members
    public function halloffame()
    {
        $this->set('raw', $this->Member->find('all'));
    }

    public function myprofile()
    {
        $this->set('raw', $this->Member->findById($this->Auth->user('id')));
    }

    public function addmember()
    {
        if ($this->request->is('post'))       
        {
            $data = $this->request->data;
            $data['Member']['password'] = $this->Auth->password($this->request->data['Member']['password']);

            $this->Member->save($data);
            pr($data['Member']['password']);
        }
    }

    public function editmember($id = null)
    {
        
        if(empty($id)){
            throw new NotFoundException;
        }
        elseif(!empty($this->request->data)){
            pr($this->request->data);
            $this->Member->save($this->request->data);
        }
        else{
            $this->request->data = $this->Member->findById($id);

        }
    }

    public function deletemember($id = null){
        if(empty($id)){
            throw new NotFoundException;
        }else{
            $this->Member->delete($id);
        }
    }

// Devices
    public function adddevice()
    {
        $members = $this->Member->findAllId();
        $this->set(compact("members"));

        if ($this->request->is('post'))
        {
            $this->Device->save($this->request->data);
            pr($this->request->data);
        }
    }

    public function editdevice($id = null)
    {
        $members = $this->Member->findAllId();
        $this->set(compact("members"));
        
        if(empty($id)){
            throw new NotFoundException;
        }
        elseif(!empty($this->request->data)){
            pr($this->request->data);
            $this->Device->save($this->request->data);
        }
        else{
            $this->request->data = $this->Device->findById($id);

        }
    }

    public function trustdevice($id = null)
    {
        
        if(empty($id)){
            throw new NotFoundException;
        }
        elseif(!empty($this->request->data)){
            pr($this->request->data);
            $this->Device->save($this->request->data);
        }
        else{
            $this->request->data = $this->Device->findById($id);

        }
    }

    public function deletedevice($id = null){
        if(empty($id)){
            throw new NotFoundException;
        }else{
            $this->Device->delete($id);
        }
    }

// Workouts
    public function addworkout()
    {
        $members = $this->Member->findAllId();
        pr($members);
        $this->set(compact("members"));
        
        if ($this->request->is('post'))       
        {
            $this->Workout->save($this->request->data);
            pr($this->request->data);
        }
    }

    public function editworkout($id = null)
    {
        $members = $this->Member->findAllId();
        $this->set(compact("members"));

        if(empty($id)){
            throw new NotFoundException;
        }
        elseif(!empty($this->request->data)){
            pr($this->request->data);
            $this->Workout->save($this->request->data);
        }
        else{
            $this->request->data = $this->Workout->findById($id);

        }
    }

    public function deleteworkout($id = null){
        if(empty($id)){
            throw new NotFoundException;
        }else{
            $this->Workout->delete($id);
        }
    }

// Logs
    public function addlog()
    {
        $members = $this->Member->findAllId();
        $this->set(compact("members"));
        $workouts = $this->Workout->findAllId();
        $this->set(compact("workouts"));
        $devices = $this->Device->findAllId();
        $this->set(compact("devices"));

        if ($this->request->is('post'))       
        {
            $this->Log->save($this->request->data);
            pr($this->request->data);
        }
    }

// siteList
    public function sitelist(){
        $this->Session->setFlash('Une action a été réalisée.');
    }

    public function showTable()
    {
        $members = $this->Member->find('all', array('fields' => array('id', 'email')));
        $this->set(compact('members'));

        $workouts = $this->Workout->find('all', array('fields' => array('id', 'date', 'end_date', 'location_name',
            'description', 'sport')));
        $this->set(compact("workouts"));

        $bonds = $this->Bond->find('all');
        $this->set(compact('bonds'));

        $devices = $this->Device->find('all');
        $this->set(compact('devices'));




    }
}

?>