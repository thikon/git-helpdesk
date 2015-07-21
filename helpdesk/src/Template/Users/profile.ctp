<div class="container">
    <div class="row">
        <div class="col-lg-8 breadcrumbf">
            <a href="index.html">ITHelpdesk</a>
            <span class="diviver">&gt;</span>
                <a href="#">My Profile</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <?php
              $systemMsg = $this->Flash->render();
              $hideMsg = ($systemMsg == '') ? 'hide' : '';
            ?>
            <!-- POST -->
            <div class="post">
              <div class="acccap <?=$hideMsg; ?>">
                  <div class="userinfo pull-left">&nbsp;</div>
                  <div class="posttext pull-left"><h3><?=$systemMsg; ?></h3></div>
                  <div class="clearfix"></div>
              </div>
              <form
                action="<?= $this->Url->build(['controller'=>'users','action'=>'updateProfile'])?>"
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
                                <!-- <input type="text" placeholder="Enter Topic Title" class="form-control" /> -->
                                <?= $this->Form->input(
                                    'userid',
                                    array(
                                      'type'=>'hidden',
                                      'value'=>$userProfile->userid
                                    )
                                  ) ?>
                                <?= $this->Form->input(
                                    'status',
                                    array(
                                      'type'=>'hidden',
                                      'value'=>'Y'
                                    )
                                  ) ?>
                                <?= $this->Form->input(
                                    'firstname',
                                    array(
                                      'class'=>'form-control',
                                      'placeholder'=>'First Name',
                                      'type'=>'text',
                                      'value'=>$userProfile->firstname
                                    )
                                  ) ?>
                            </div>
                            <div>
                                <!-- <input type="text" placeholder="Enter Topic Title" class="form-control" /> -->
                                <?= $this->Form->input(
                                    'lastname',
                                    array(
                                      'class'=>'form-control',
                                      'placeholder'=>'Last Name',
                                      'type'=>'text',
                                      'value'=>$userProfile->lastname
                                    )
                                  ) ?>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="postinfobot">
                        <div class="notechbox pull-left">
                            &nbsp;
                        </div>

                        <div class="pull-left">
                            <label for="note"> Please check your profile information.</label>
                        </div>

                        <div class="pull-right postreply">
                            <div class="pull-left"><button type="submit" class="btn btn-primary">Update</button></div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                <!-- </form> -->
                <?= $this->Form->end(); ?>
            </div><!-- POST -->


        </div>
        <div class="col-lg-4 col-md-4">
        </div>
    </div>
</div>
