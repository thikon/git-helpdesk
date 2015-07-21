<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Database\Schema\Table;
use Cake\Event\Event;
use App\Model\Entity\UserTimestamps;
use Cake\Network\Exception\NotFoundException;

class UsersController extends AppController
{
   public function beforeFilter(Event $event)
   {
      parent::beforeFilter($event);
      $this->loadComponent('Flash');
      $this->Auth->allow('add');
   }

   public function index()
   {
      // $user = TableRegistry::get('user');
      // $users = $user->find();
      // $this->set(compact('users'));
   }

   public function profile(){
       $userProfile = $this->Users->get($this->Auth->user('userid'));
       $this->set(compact('userProfile'));

   }

   public function updateProfile(){
     $usersTable = TableRegistry::get('Users');
     $userprofile = $this->Users->get($this->Auth->user('userid'));
     if($this->request->is('post')){
       $this->Users->patchEntity($userprofile, $this->request->data);
       if($usersTable->save($userprofile)){
          $this->Flash->success(__('Your profile has been updated.'));
           return $this->redirect(['action' => 'profile']);
       }
       $this->Flash->error(__('Unable to update your profile.'));

     }
   }

   public function add(){
      $user = $this->Users->newEntity();
      if ($this->request->is('post')) {
          $user = $this->Users->patchEntity($user, $this->request->data);
          if ($this->Users->save($user)) {
              $this->Flash->success(__('The user has been saved.'));
              return $this->redirect(['action' => 'add']);
          }
          $this->Flash->error(__('Unable to add the user.'));
      }
      $this->set('user', $user);
   }

   /* Security function */
   public function login(){
     if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            $this->loggingTimeStamp($this->Auth->user('userid'));
            return $this->redirect('/questions/newQuestion');
        } else {
            $this->Flash->error(
                __('Username or password is incorrect'),
                'default',
                [],
                'auth'
            );
        }
    }
   }

   public function logout(){
     return $this->redirect($this->Auth->logout());
   }

   /* Security function */

   /* Custom function */
   public function loggingTimeStamp($userid){
     $logging = new UserTimestamps([
       'userid'=> $userid,
       'action'=> "LOGIN",
       'createdDate'=> date("Y-m-d H:i:s")
     ]);
     $this->loadModel('UserTimestamps');
     $this->UserTimestamps->save($logging);
   }
   /* Custom function */

}

?>
