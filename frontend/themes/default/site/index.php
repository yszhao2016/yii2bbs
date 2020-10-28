<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div id="myCarousel" class="carousel slide">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="https://static.vhieg.com/data/attachment/common/20191228/4eb0db7dae369673a7be35f543941aab.jpeg" alt="First slide">
            </div>
            <div class="item">
                <img src="https://static.vhieg.com/data/attachment/common/20200612/3c3739f767e9bdc25ab02cc08901e6cb.jpeg" alt="Second slide">
            </div>
            <div class="item">
                <img src="https://static.vhieg.com/data/attachment/common/20200612/55b3ce6b64472f659a99d242ee1a04d9.jpeg" alt="Third slide">
            </div>
        </div>
        <!-- 轮播（Carousel）导航 -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="main">
        <div class="row">
            <div class="col-lg-8 index-page-left">
                <div class="feed-list">
                    <div class="feed-item round-card">
                        <div class="title">
                            <div class="word">硬件交流区</div>
                        </div>
                        <a href="/section/index">
                            <img src="https://static.vhieg.com/data/attachment/common/72/common_57_banner.jpg" alt="">
                        </a>
                        <div class="desc">
                            <p>
                                咪咕快游家庭娱乐终端用户交流的聚集地~
                            </p>
                        </div>
                    </div>
                    <div class="feed-item round-card">
                        <div class="title">
                            <div class="word">硬件交流区</div>
                        </div>
                        <a href="">
                            <img src="https://static.vhieg.com/data/attachment/common/72/common_57_banner.jpg" alt="">
                        </a>
                        <div class="desc">
                            <p>
                                咪咕快游家庭娱乐终端用户交流的聚集地~
                            </p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 index-page-right">
                <div class="index-pageright-item">
                    <img src="" alt="">
                </div>

                <div class="index-pageright-item">
                    <img src="" alt="">
                </div>

                <div class="index-pageright-item">
                    <img src="" alt="">
                </div>
            </div>
        </div>

    </div>
</div>
