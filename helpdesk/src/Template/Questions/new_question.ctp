<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

//$this->layout = "default";

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

 ?>

 <script type='text/javascript'>
   $(function() {
        $('#tags').tagsInput({width:'auto'});

   });
 </script>

<div class="container">
    <div class="row">
        <div class="col-lg-8 breadcrumbf">
            <a href="index.html">ITHelpdesk</a>
            <span class="diviver">&gt;</span>
                <a href="#">General Discussion</a>
            <span class="diviver">&gt;</span>
                <a href="#">New Topic</a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <!-- POST -->
            <div class="post">
                <?php
                  $msgEnable = $this->Flash->render();
                ?>
                <div class="acccap <?= is_null($msgEnable)? 'hide':'' ?>">
                    <div class="userinfo pull-left">&nbsp;</div>
                    <div class="posttext pull-left"><h3><?= $msgEnable; ?></h3></div>
                    <div class="clearfix"></div>
                </div>
                <!-- <form action="#" class="form newtopic" method="post"> -->
                <form
                  action="<?= $this->Url->build(['controller'=>'questions','action'=>'newQuestion'])?>"
                  method="post"
                  class="form newtopic">
                    <div class="topwrap">
                        <div class="userinfo pull-left">
                            <div class="avatar">
                                <?= $this->Html->image('/images/profile.png') ?>
                                <div class="status green">&nbsp;</div>
                            </div>

                            <div class="icons">

                            </div>
                        </div>
                        <div class="posttext pull-left">
                            <div>
                                <?= $this->Form->input('title',
                                  array(
                                    'class'=>'form-control',
                                    'placeholder'=>'Enter Topic Title',
                                    'type'=>'text',
                                    'templates' => [
                                        'formGroup' => '{{input}}'
                                    ])) ?>
                            </div>

                            <div>
                                <!-- hash tag master here. -->
                                <?= $this->Form->input('tags',
                                  array(
                                    'class'=>'form-control',
                                    'type'=>'text',
                                    'templates' => [
                                        'formGroup' => '{{input}}'
                                    ])) ?>
                            </div>

                            <div>
                                <!-- <textarea name="desc" id="desc" placeholder="Description"  class="form-control" ></textarea> -->
                                <?= $this->Form->input('description',
                                  array(
                                    'class'=>'form-control',
                                    'placeholder'=>'Description',
                                    'type'=>'textarea',
                                    'templates' => [
                                        'formGroup' => '{{input}}'
                                    ])) ?>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="postinfobot">
                        <div class="notechbox pull-left">
                            &nbsp;
                        </div>

                        <div class="pull-left">
                            <label for="note"> Leave your topic.</label>
                        </div>

                        <div class="pull-right postreply">
                            <div class="pull-left"><button type="submit" class="btn btn-primary">Post</button></div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                </form>
            </div><!-- POST -->

            <div class="row similarposts">
                <div class="col-lg-10"><i class="fa fa-info-circle"></i> <p>Similar Posts according to your <a href="#">Topic Title</a>.</p></div>
                <div class="col-lg-2 loading"><i class="fa fa-spinner"></i></div>

            </div>

            <!-- POST -->
            <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <?= $this->Html->image('/images/profile.png') ?>
                            <div class="status green">&nbsp;</div>
                        </div>

                        <div class="icons">

                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2>10 Kids Unaware of Their Halloween Costume</h2>
                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            5
                            <div class="mark"></div>
                        </div>

                    </div>
                    <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>
                </div>
                <div class="clearfix"></div>
            </div><!-- POST -->

        </div>
        <div class="col-lg-4 col-md-4">

            <!-- -->
            <div class="sidebarblock">
                <h3>Categories</h3>
                <div class="divline"></div>
                <div class="blocktxt">
                    <ul class="cats">
                        <li><a href="#">คอมพิวเตอร์โดนไวรัส <span class="badge pull-right">20</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
