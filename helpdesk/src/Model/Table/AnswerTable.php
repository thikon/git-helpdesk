<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class AnswerTable extends Table{
  public function initialize(array $config)
  {
      $this->table('usertimestamps');
  }
}

 ?>
