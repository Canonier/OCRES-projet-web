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
    public function index(){

    }

// Members
    public function halloffame(){
        $this->set('raw', $this->Member->find('all'));
    }

    public function myprofile(){
        $raw = $this->Member->findById($this->Auth->user('id'));
        $this->set(compact('raw'));
        if($this->request->is('post')){
            // if we change the password
            if(!empty($this->request->data['Password'])){
                $data = $this->request->data['Password'];
                // Check if password is correct
                $old = $this->Auth->password($data['old']);
                if($old == $raw['Member']['password']){
                    // check if new passwords are identical
                    if($data['new'] == $data['verify']){
                        $new = $this->Auth->password($data['new']);
                        $raw['Member']['password'] = $new;
                        if($this->Member->save($raw)){
                            $this->request->data = null;
                            $this->Flash->success(__('Mot de passe correctement mis à jour!'));
                        }else{
                            $this->request->data = null;
                            $this->Flash->error(__('Une erreur est survenue, merci de réitérer l\'action.'));
                        }
                    }else{
                        $this->request->data = null;
                    $this->Flash->error(__('Vos nouveaux mots de passe ne correspondent pas.'));
                    }
                }else{
                    $this->request->data = null;
                    $this->Flash->error(__('Votre ancien mot de passe ne correspond pas.'));
                }

            }

            // if we change the avatar
            else if(!empty($this->request->data['Avatar'])){
                $data = $this->request->data['Avatar']['Upload'];
                if(!empty($data['name']) && $data['error'] == 0){ // if upload are correct
                    // Check the extension
                    if($data['type'] != 'image/jpeg' && $data['type'] != 'image/png' ){
                        $this->Flash->error(__('Extension de type '.$data['type'].' non tolérées.'));
                    }else{ // if ext is correct.
                        // move it && force .png extension
                        $moveTo = WWW_ROOT.'img'.DS.$this->Auth->user('id').'.png';
                        move_uploaded_file($data['tmp_name'], $moveTo);
                        if( (time() - filemtime($moveTo)) < 5 ){ // Si l'image est plus jeune que 5secondes
                            $this->Flash->success(__('Avatar mis à jour!'));
                        }else{
                            $this->Flash->error(__('Un problème est survenu. Merci de contacter le webmaster à webmaster@ocres.fr, en joignant le fichier que vous vouliez uploader.'));
                        }
                    }
                }else{
                    $error = array(
                        'Votre image est trop lourde.',
                        'Votre image est trop lourde.',
                        'L\'image ne s\'est uploadée que partiellement, merci de réessayer.',
                        'Votre fichier semble corrompu, merci d\'en choisir un autre'
                        );
                    $this->Flash->error(__('Un problème est survenu. '.$error[$data['error']]));
                }
            }else{
                $this->Flash->error(__('Un problème est survenu. Assurez-vous d\'avoir correctement rempli les champs nécessaires.'));
            }
        }
    }

    public function myworkouts(){
        $workouts = $this->Workout->find('all', array('conditions' => array('member_id' => $this->Auth->user('id')), 'order' => array('date DESC')));
        $this->set(compact('workouts'));
    }

    public function mydevices(){

        $trustedDevices = $this->Device->find('all'
            ,array(
                'conditions' => array('member_id' => $this->Auth->user('id'), array('trusted' => 1))
                ,'fields' => array('serial', 'description', 'Member.email')
            )
        );
        $this->set(compact('trustedDevices'));

        $unTrustedDevices = $this->Device->find('all'
            , array(
                'conditions' => array('member_id' => $this->Auth->user('id'), array('trusted' => 0))
                 ,'fields' => array('serial', 'description', 'Member.email')
            )
        );
        $this->set(compact('unTrustedDevices'));
    }

    public function addmember(){
        if ($this->request->is('post'))
        {
            $data = $this->request->data;
            $data['Member']['password'] = $this->Auth->password($this->request->data['Member']['password']);

            $this->Member->save($data);
            pr($data['Member']['password']);
        }
    }

    public function editmember($id = null){
        
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
    public function adddevice(){
        $members = $this->Member->findAllId();
        $this->set(compact("members"));

        if ($this->request->is('post'))
        {
            $this->Device->save($this->request->data);
            pr($this->request->data);
        }
    }

    public function editdevice($id = null){
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
    public function addworkout(){   
        if ($this->request->is('post'))       
        {
            $this->request->data['Workout']['member_id'] = $this->Auth->user('id');
            $this->Workout->save($this->request->data);
            $this->request->data = null;
            $this->Flash->success(__('Séance créée.'));
        }
    }

    public function editworkout($id = null){
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
    public function addlog($workout_id){
        // $devices = $this->Device->findAllId();
        // $this->set(compact("devices"));

        if ($this->request->is('post'))       
        {
            $this->request->data['Log']['member_id'] = $this->Auth->user('id');
            $this->request->data['Log']['workout_id'] = $workout_id;
            $this->request->data['Log']['datetime'] = date("Y-m-d H:i:s");
            $this->Log->save($this->request->data);
            pr($this->request->data);
        }
    }

// siteList
    public function sitelist(){
        $this->Session->setFlash('Une action a été réalisée.');
    }

    public function showTable(){
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