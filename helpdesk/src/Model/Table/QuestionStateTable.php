<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class QuestionStateTable extends Table
{
  public function initialize(array $config)
  {
      $this->table('questionstate');
  }
}

?>
