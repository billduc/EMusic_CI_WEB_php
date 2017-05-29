<?php
/**
 * Created by dinhty.luu@gmail.com
 * Date: 28/05/2017
 * Time: 10:18
 */ ?>

<!DOCTYPE html>
<!--[if IE 7 ]>
<html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
    <title><?= 'List Album' ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- Seo Meta -->
    <meta name="description" content="Remix - Music & Band Site Template HTML5 and CSS3">
    <meta name="keywords" content="remix, music, light, dark, themeforest, multi purpose, band, css3, html5">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('resource/frontend/css'); ?>/bootstrap.min.css"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('resource/frontend/css'); ?>/bootstrap-responsive.min.css"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('resource/frontend/css'); ?>/style.css" id="dark"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('resource/frontend/css'); ?>/settings.css"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('resource/frontend/css'); ?>/icons.css" media="screen"/>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('resource/frontend/images'); ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?= base_url('resource/frontend/images'); ?>/apple-touch-icon.png">

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE"/>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css"/>
    <![endif]-->
</head>
<body id="fluidGridSystem">
<div id="layout" class="full">
    <!-- popup login -->
    <?php $this->load->view('user/popup_login'); ?>
    <!-- popup login -->

    <header id="header" class="glue">
        <?php $this->load->view('user/header'); ?>
    </header><!-- end header -->

    <div class="under_header">
        <img src="<?=base_url('resource/frontend/images/assets/breadcrumbs10.png');?>" alt="#">
    </div><!-- under header -->

    <div class="page-content back_to_up">
        <div class="page-content back_to_up">
            <div class="row clearfix mb">
                <div class="Alphabet">

                </div><!-- breadcrumb -->
            </div><!-- row -->

            <div class="row row-fluid clearfix mbf">
                <div class="span8 posts">
                    <div class="block">
                        <ul class="tabs">
                            <li><a href="#Albums" class="active">Album Mới</a></li>
                        </ul><!-- tabs -->

                        <ul class="tabs-content">

                            <li id="Albums" style="display: block">
                                <div class="mp3-albums">
                                    <?php foreach ($listAlbum as $album): ?>
                                        <a href="<?= base_url('album/listSong?id=' . $album->id); ?>" class="grid_3">
                                            <img src="<?=base_url($album->thumbnail);?>" alt="#">
                                            <span><strong><?=$album->name;?></strong></span>
                                        </a>
                                    <?php endforeach; ?>

                                </div><!-- mp3 albums -->
                            </li><!-- tab content -->

                        </ul><!-- end tabs -->

                    </div><!-- def block -->
                </div><!-- span8 posts -->

                <div class="span4 sidebar" style="margin-top: 45px">
                    <div class="def-block widget">
                        <h4>Bài hát hot nhất</h4><span class="liner"></span>
                        <div class="widget-content row-fluid">
                            <div class="scroll-oneperson" style="height: 420px;">
                                <div class="content">
                                    <ul class="tab-content-items">
                                        <?php foreach ($listSong as $value): ?>
                                            <li>
                                                <a class="m-thumbnail" href="song?id=<?= $value->id; ?>">
                                                    <img width="50"
                                                         height="50"
                                                         src="<?= base_url($listSinger[$value->singer_id][1]); ?>"
                                                         alt="#">
                                                </a>
                                                <h3>
                                                    <a href="<?= base_url('song/listening?id=' . $value->id); ?>"><?= $value->name; ?></a>
                                                </h3>
                                                <span> <?= $listSinger[$value->singer_id][0]; ?> </span>
                                                <span> <?= $value->view_num; ?> Lượt nghe </span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- widget content -->
                    </div><!-- def block widget popular items -->


                </div><!-- span4 sidebar -->
            </div><!-- row clearfix -->
        </div><!-- end page content -->
    </div><!-- end page content -->

    <footer id="footer">
        <?php $this->load->view('user/footer'); ?>

    </footer><!-- end footer -->

</div><!-- end layout -->
<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/theme20.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript"
        src="<?= base_url('resource/frontend/js'); ?>/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/jquery.jplayer.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/ttw-music-player-min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/countdown.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/custom.js"></script>
</body>
</html>
