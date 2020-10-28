<?php
use kriss\wangEditor\widgets\WangEditorWidget;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'xx 详情';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="main topicpage">
                <div class="user-info clearfix ">
                    <div class="user-avatar">
                        <a href="">
                            <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                        </a>
                    </div>
                    <div class="user-topic">
                        <div class="user-topic-info">
                            <a href=""><span class="user-name">莫忘歌</span></a>
                            <span class="user-level">Lv9</span>
                        </div>
                        <div class="topic-time">2020-10-15 17:20:52</div>
                    </div>
                </div>
                <h3>咪咕游戏手柄豪华定制版-这是你从未见过的全新版本</h3>
                <div class="topic-content">
                    <span>咪咕快游家庭娱乐终端套装配购买时会配有一个咪咕游戏手柄豪华定制版（下文简称“咪咕定制手柄”），这个咪咕定制手柄虽然外观看上去和市面上其他的豪华版咪咕手柄一样，但是实际上却针对咪咕快游家庭娱乐终端做了定制化处理，使用体验完全不同，所以一定要认准我们官方店铺中的咪咕定制手柄使用。<br><br>因包装中的手柄纸质说明书篇幅有限，所以我在这边补充一下，详细介绍一下我们咪咕定制手柄都有哪些功能吧。<br><br>一.连接模式<br><br>咪咕定制手柄在连接模式上和豪华版一样， 共有三个模式：<br><br>1，LED1灯亮：长按A+migu键，可以用蓝牙连接手机和平板<br><br>2，LED2灯亮：长按X+migu键，可以用有线或2.4G接收器以Xinput模式连接电脑<br><br>3，LED3灯亮：长按Y+migu键，可以用有线或2.4G接收器以Dinput模式连接电脑和TV安卓盒子<br><br>简单总结一下：咪咕定制手柄可以这么连接咪咕快游家庭娱乐终端：<br><br>1，短按咪咕快游家庭娱乐终端上的咪咕手柄快连键打开蓝牙，长按手柄A+migu键等待自动连接<br><br>2，插入2.4G接收器或者接上USB线有线连接。长按手柄Y+migu键等待配对完成<br><br>二，定制按键<br><br>为了照顾遥控器用户的使用习惯，咪咕定制手柄的部分键值针对咪咕快游家庭娱乐终端做了定制化修改，让手柄也能做到像遥控器一样使用，而定制化的重点就是咪咕定制手柄背后的4个背触键：M1，M2，M3，M4。<br><br>M1/M2可以调节咪咕快游家庭娱乐终端的“音量增加”/“音量减小”<br><br>M3/M4则为遥控器上常用的“返回键”/“确认键”<br><br>这四个背触键在操作咪咕快游家庭娱乐终端时可以随时按下使用，比如玩云游戏时用手柄调节音量大小，或者完美操控那些原生不兼容手柄的TV应用，这是普通的咪咕手柄豪华版甚至其它第三方手柄都无法做到的。<br><br>三，其他特色功能<br><br>除了上面的定制化功能之外，咪咕定制手柄还有很多可以自定义的特色功能：<br><br>1，在云游戏中，长按START键可呼出菜单界面，可以根据需要调整游戏设置<br><br>2，在云游戏中，短按migu键可呼出操作说明界面，可以查看该云游戏的操作按键说明<br><br>3，长按TURBO键，同时按下X/Y/A/B/LB/RB六个按键中其中一个可以将该按键设为连击键，按住连击键会以60ms/次的速度进行连击，在部分游戏里可以发挥出堪称外挂的作用<br><br>4，长按TURBO键，同时短按十字键上的右方向键，可以调节按键灯光亮度，共9档<br><br>5，长按TURBO键，同时短按十字键上的左方向键，可以调节马达震动强度，共4档<br><br>6，长按RB+X+MIGU键，可以断开当前已连接的2.4G接收器，重新配对新接收器，如果是有多个咪咕定制手柄的情况下很实用<br><br>当然了，除了上述这些功能，游戏中常用的双摇杆，十字键，ABXY，扳机键等等按键咪咕定制手柄上面也是一个不少。但因为这些按键在每个游戏中的实际功能都完全不同，所以这些就由大家在云游戏的操作说明界面自己探索吧~<br><br></span><br>
                </div>


                <div class="">
                    <div>
                        <h3>发表回复</h3>
                    </div>
                    <div>

                    <?php echo CKEditor::widget();?>


                    </div>
                    <div>
                        <button class="btn btn-primary"  style="float: right;margin-top: 20px" type="submit">发表</button>
                    </div>
                    <div>
                        <div>
                            <h3>全部回复</h3>
                        </div>
                        <ul class="reply-list list-group">
                            <li class="list-group-item">
                                <div class="reply-user-info clearfix">
                                    <div class="user-avatar">
                                        <a href="">
                                            <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="reply-content">
                                    评论1 评论1 评论1 评论1
                                </div>
                                <div>
                                    <span></span>
                                    <span data-toggle="modal" data-target="#myModal">回复</span>
                                </div>
                                <div class="">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>

                                        </li>
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>

                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li class="list-group-item">
                                <div class="reply-user-info clearfix">
                                    <div class="user-avatar">
                                        <a href="">
                                            <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="reply-content">
                                    评论1 评论1 评论1 评论1
                                </div>
                                <div></div>
                                <div class="">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>

                                        </li>
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>

                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li class="list-group-item">
                                <div class="reply-user-info clearfix">
                                    <div class="user-avatar">
                                        <a href="">
                                            <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="reply-content">
                                    评论1 评论1 评论1 评论1
                                </div>
                                <div></div>
                                <div class="">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>

                                        </li>
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>

                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li class="list-group-item">
                                <div class="reply-user-info clearfix">
                                    <div class="user-avatar">
                                        <a href="">
                                            <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="reply-content">
                                    评论1 评论1 评论1 评论1
                                </div>
                                <div></div>
                                <div class="">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>

                                        </li>
                                        <li class="list-group-item">
                                            <div class="reply-user-info clearfix">
                                                <div class="user-avatar">
                                                    <a href="">
                                                        <img src="https://static.vhieg.com/data/avatar/8.jpeg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-content">
                                                评论1 评论1 评论1 评论1
                                            </div>

                                        </li>
                                    </ul>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>

        </div>
        <div>

        </div>

    </div>

</div>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    模态框（Modal）标题
                </h4>
                <div class="form-group">
                    <textarea class="form-control" rows="10"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary">
                    提交更改
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

