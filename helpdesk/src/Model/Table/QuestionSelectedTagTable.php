<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class QuestionSelectedTagTable extends Table
{
  public function initialize(array $config)
  {
      $this->table('questionselectedtag');
  }
}

?>
