<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
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
        <div class="col-lg-8 col-xs-12 col-md-8">
            <div class="pull-left">
                <a href="#" class="prevnext">
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">

            <!-- POST -->
            <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <img src="images/avatar.jpg" alt="" />
                            <div class="status green">&nbsp;</div>
                        </div>

                        <div class="icons">

                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a href="topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            10
                            <div class="mark"></div>
                        </div>

                    </div>
                    <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- POST -->


        </div>
        <div class="col-lg-4 col-md-4">
            <!-- Categories -->
            <div class="sidebarblock">
                <h3>Categories</h3>
                <div class="divline"></div>
                <div class="blocktxt">
                    <ul class="cats">
                        <li><a href="#">คอมพิวเตอร์โดนไวรัส <span class="badge pull-right">20</span></a></li>
                        <li><a href="#">ไม่สามารถใช้งานคอมพิวเตอร์ได้ <span class="badge pull-right">10</span></a></li>
                        <li><a href="#">เชื่อมต่ออินเตอร์เนตไม่ได้ <span class="badge pull-right">50</span></a></li>
                        <li><a href="#">จำรหัสผ่านเครื่องตนเองไม่ได้ <span class="badge pull-right">36</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-lg-8 col-xs-12">
            <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
            <div class="pull-left">
                <ul class="paginationforum">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                </ul>
            </div>
            <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
            <div class="clearfix"></div>
        </div>
    </div>
  </div>
