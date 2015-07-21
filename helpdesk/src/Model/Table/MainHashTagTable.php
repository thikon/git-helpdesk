<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class MainHashTagTable extends Table
{
  public function initialize(array $config)
  {
      $this->table('mainhashtag');
  }
}

?>
