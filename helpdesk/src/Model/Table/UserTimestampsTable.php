<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class UserTimestampsTable extends Table{
  public function initialize(array $config)
  {
      $this->table('usertimestamp');
  }
}

 ?>
