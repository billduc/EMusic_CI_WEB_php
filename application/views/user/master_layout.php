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
    <?php $this->load->view('user/head'); ?>
</head>
<body id="fluidGridSystem">
<div id="layout" class="full">



    <?php $this->load-> view('user/popup_login'); ?>
    <!-- popup login -->
    <header id="header" class="glue">
        <?php $this->load->view('user/header'); ?>
    </header><!-- end header -->

    <!-- Start Revolution Slider -->
    <div class="sliderr">
        <?php $this->load->view('user/slider'); ?>
    </div>
    <!-- End Revolution Slider -->

    <div class="page-content">


        <div class="row row-fluid clearfix mbf">
            <div class="span8">
                <div class="def-block">
                    <h4> Latest News </h4><span class="liner"></span>
                    <?php foreach ($listAlbum as $value): ?>
                        <div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
                            <div class="span5"><img class="four-radius" src="<?= base_url($value->thumbnail); ?>"
                                                    alt="#"></div>
                            <div class="span7">
                                <h3 class="news-title"><a href="album?id=<?= $value->id; ?>"><?= $value->name; ?></a>
                                </h3>
                                <p><?= $value->description; ?></p>
                                <div class="meta">
                                    <span> <i class="icon-time mi"></i><?= date('Y-m-d H:m', strtotime($value->updated_at)); ?> </span>
                                    | <span> <a href="#"><i
                                                    class="icon-comments-alt"></i></a><?= ' ' . rand(10, 100); ?></span>
                                </div><!-- meta -->
                                <!--                                <a href="news_single.html" class="sign-btn tbutton small"><span>Read More</span></a>-->
                            </div><!-- span7 -->
                        </div><!-- news -->
                    <?php endforeach; ?>
                </div><!-- def block -->
            </div><!-- span8 news -->

            <div class="span4">


                <div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
                    <h4>Bài hát hot nhất</h4><span class="liner"></span>
                    <div class="widget-content row-fluid">
                        <div class="scroll-mp3" style="height: 220px;">
                            <div class="content">
                                <ul class="tab-content-items">
                                    <?php foreach ($listSong as $value): ?>
                                        <li class="clearfix">
                                            <a class="m-thumbnail" href="song?id=<?= $value->id; ?>">
                                                <img width="50"
                                                     height="50"
                                                     src="<?= base_url($listSinger[$value->singer_id][1]); ?>"
                                                     alt="#">
                                            </a>
                                            <h3><a href="song/listening?id=<?= $value->id; ?>"><?=$value->name;?></a></h3>
                                            <span> <?=$listSinger[$value->singer_id][0];?> </span>
                                            <span> 1,892,250 Plays </span>
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
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/myplaylist.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/countdown.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js'); ?>/custom.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    jQuery(document).ready(function () {
        jQuery('.tp-banner').revolution({
            delay: 9000,
            startwidth: 1060,
            startheight: 610,
            hideThumbs: 10,
            navigationType: "off",
            fullWidth: "on",
            forceFullWidth: "on"
        });
        jQuery("#event1").countdown({
                date: "31 December 2017 23:59:59",
                format: "on"
            },
            function () {
                // callback function
            });
    });
    /* ]]> */
</script>
</body>
</html>
