<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class QuestionTable extends Table
{
  public function initialize(array $config)
  {
      $this->table('question');

      $this->hasMany('user', [
              'className' => 'User',
              'conditions' => ['approved' => true]
          ]);

          $this->hasMany('user', [
              'className' => 'User',
              'conditions' => ['approved' => false],
              'propertyName' => 'userid'
          ]);
  }
}

?>
