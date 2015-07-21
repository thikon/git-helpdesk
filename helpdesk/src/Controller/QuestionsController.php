<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Database\Schema\Table;
use Cake\Event\Event;
use Cake\I18n\Time;

class QuestionsController extends AppController
{
    public function initialize(){
      parent::initialize();
      $this->loadComponent('RequestHandler');
    }


    public function beforeFilter(Event $event){
      parent::beforeFilter($event);
      $this->Auth->allow('index','loadquestion');
    }

    public function index()
    {

    }

    public function newQuestion(){
      // check authenticate session first if not redirect to login page
      if($this->Auth->user() == null){
          return $this->redirect(['controller'=>'user','action'=>'login']);

      }else{

        $question = $this->Questions->newEntity();
        if($this->request->is('post')){
          $item = $this->Questions->patchEntity($question, $this->request->data);
          $item->userid = $this->Auth->user('userid');
          $item->createdDate = Time::now();

          // 10 days assign for life cycle.
          $item->expiredDate = Time::now()->addMonth(1);

          if ($this->Questions->save($item)) {
              $this->Flash->success(__('Your topic has been created.'));
              return $this->redirect(['action' => 'newQuestion']);
          }
          $this->Flash->error(__('Unable to save a topic.'));
        }

      }
    }

    public function loadquestion(){
      $articles = 'run';
      $this->set(compact('articles'));
    }
}

?>
