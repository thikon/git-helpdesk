<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = "default";

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

 ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 breadcrumbf">
            <a href="#">Sign In</a>
        </div>
    </div>
</div>
<div class="container">
  <div class="row">
       <div class="col-lg-8 col-md-8">
         <!-- POST -->
          <div class="post">
                <form
                  action="<?= $this->Url->build(['controller'=>'users','action'=>'login'])?>"
                  method="post"
                  class="form newtopic">
                <div class="postinfotop">
                    <h2>Sign In</h2>
                </div>
                <!-- acc section -->
               <div class="accsection">
                   <?php $msgAuthErr = $this->Flash->render('auth'); ?>
                   <?php $msgSystemErr = $this->Flash->render(); ?>
                   <?php if(!empty($msgAuthErr) || !empty($msgSystemErr)){ ?>
                   <div class="acccap">
                       <div class="userinfo pull-left">&nbsp;</div>
                       <div class="posttext pull-left"><h3><?= !empty($msgAuthErr) ? $msgAuthErr : $msgSystemErr; ?></h3></div>
                       <div class="clearfix"></div>
                   </div>
                   <?php } ?>
                   <div class="topwrap">
                       <div class="userinfo pull-left"></div>
                       <div class="posttext pull-left">
                           <div class="row">
                               <div class="col-lg-6 col-md-6">
                                   <!-- <input type="text" placeholder="User Name" class="form-control" id="username" /> -->
                                   <?= $this->Form->input('username',array('class'=>'form-control','placeholder'=>'User Name','type'=>'text')) ?>
                               </div>
                           </div>
                           <div class="row">
                             <div class="col-lg-6 col-md-6">
                                 <!-- <input type="password" placeholder="Password" class="form-control" id="pass"/> -->
                                 <?= $this->Form->input('password' ,array('class'=>'form-control','placeholder'=>'Password','type'=>'password')) ?>
                             </div>
                           </div>
                           <div class="row">&nbsp;</div>
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                                <button type="submit" class="btn btn-primary" id="signin">Sign In</button>
                              </div>
                           </div>
                       </div>
                       <div class="clearfix"></div>
                   </div>
               </div><!-- acc section END -->
             </form>
          </div>
       </div>
  </div>
</div>
