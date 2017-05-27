<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
    <?php $this->load-> view('user/head'); ?>
</head>
<body id="fluidGridSystem">
<div id="layout" class="full">
    <!-- popup login -->
    <div id="popupLogin">
        <div class="def-block widget">
            <h4> Sign In </h4><span class="liner"></span>
            <div class="widget-content row-fluid">
                <form id="popup_login_form">
                    <input type="text" name="login_username" id="login_username" onfocus="if (this.value=='username') this.value = '';" onblur="if (this.value=='') this.value = 'username';" value="username" placeholder="username">
                    <input type="password" name="login_password" id="login_password" onfocus="if (this.value=='password') this.value = '';" onblur="if (this.value=='') this.value = 'password';" value="password" placeholder="password">
                    <a href="#" class="tbutton small"><span>Sign In</span></a>
                    <a href="#" class="tbutton color2 small"><span>Register</span></a>
                </form><!-- login form -->
            </div><!-- content -->
        </div><!-- widget -->
        <div id="popupLoginClose">x</div>
    </div><!-- popup login -->
    <div id="LoginBackgroundPopup"></div>
    <!-- popup login -->

    <header id="header" class="glue">
        <?php $this->load-> view('user/header'); ?>
    </header><!-- end header -->

    <!-- Start Revolution Slider -->
    <div class="sliderr">
        <?php $this->load-> view('user/slider'); ?>
    </div>
    <!-- End Revolution Slider -->

    <div class="page-content">


        <div class="row row-fluid clearfix mbf">
            <div class="span8">
                <div class="def-block">
                    <h4> Latest News </h4><span class="liner"></span>

                    <div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
                        <div class="span5"><img class="four-radius" src="<?= base_url('resource/frontend/images');?>/assets/news1.jpg" alt="#"></div>
                        <div class="span7">
                            <h3 class="news-title"> <a href="news_single.html">Australia’s 2014 Soundwave Festival</a> </h3>
                            <p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
                            <div class="meta">
                                <span> <i class="icon-time mi"></i>August 26, 2013 5:09 AM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 14</a> </span>
                            </div><!-- meta -->
                            <a href="news_single.html" class="sign-btn tbutton small"><span>Read More</span></a>
                        </div><!-- span7 -->
                    </div><!-- news -->

                    <div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
                        <div class="span5"><img class="four-radius" src="<?= base_url('resource/frontend/images');?>/assets/news2.jpg" alt="#"></div>
                        <div class="span7">
                            <h3 class="news-title"> <a href="news_single.html">MTV Video Music Awards 2013</a> </h3>
                            <p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
                            <div class="meta">
                                <span> <i class="icon-time mi"></i>August 24, 2013 8:10 PM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 5</a> </span>
                            </div><!-- meta -->
                            <a href="news_single.html" class="sign-btn tbutton small"><span>Read More</span></a>
                        </div><!-- span7 -->
                    </div><!-- news -->

                    <div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
                        <div class="span5"><img class="four-radius" src="<?= base_url('resource/frontend/images');?>/assets/news3.jpg" alt="#"></div>
                        <div class="span7">
                            <h3 class="news-title"> <a href="news_single.html">VMAs With A Round Of 'Applause'</a> </h3>
                            <p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
                            <div class="meta">
                                <span> <i class="icon-time mi"></i>August 20, 2013 2:00 AM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 27</a> </span>
                            </div><!-- meta -->
                            <a href="news_single.html" class="tbutton small"><span>Read More</span></a>
                        </div><!-- span7 -->
                    </div><!-- news -->

                    <div class="load-news tac"><a href="#" class="tbutton small"><span>Load More</span></a></div>
                </div><!-- def block -->
            </div><!-- span8 news -->

            <div class="span4">


                <div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
                    <h4>Bài hát hot nhất</h4><span class="liner"></span>
                    <div class="widget-content row-fluid">
                        <div class="scroll-mp3" style="height: 220px;">
                            <div class="content">
                                <ul class="tab-content-items">
                                    <li class="clearfix">
                                        <a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="<?= base_url('resource/frontend/images');?>/assets/thumb-mp3-1.jpg" alt="#"></a>
                                        <h3><a href="mp3_single_half.html">Don’t go mary ( Remix )</a></h3>
                                        <span> Alexander </span>
                                        <span> 1,892,250 Plays </span>
                                    </li>
                                    <li class="clearfix">
                                        <a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="<?= base_url('resource/frontend/images');?>/assets/thumb-mp3-2.jpg" alt="#"></a>
                                        <h3><a href="mp3_single_half.html">That's My Kind Of Night </a></h3>
                                        <span> Alexander Mikoole </span>
                                        <span> 998,879 Plays </span>
                                    </li>
                                    <li class="clearfix">
                                        <a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="<?= base_url('resource/frontend/images');?>/assets/thumb-mp3-3.jpg" alt="#"></a>
                                        <h3><a href="mp3_single_half.html">Magna Carta... Holy Grail </a></h3>
                                        <span> Joe </span>
                                        <span> 792,240 Plays </span>
                                    </li>
                                    <li class="clearfix">
                                        <a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="<?= base_url('resource/frontend/images');?>/assets/thumb-mp3-4.jpg" alt="#"></a>
                                        <h3><a href="mp3_single_half.html">If you love me</a></h3>
                                        <span> Enrique </span>
                                        <span> 788,471 Plays </span>
                                    </li>
                                    <li class="clearfix">
                                        <a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="<?= base_url('resource/frontend/images');?>/assets/thumb-mp3-5.jpg" alt="#"></a>
                                        <h3><a href="mp3_single_half.html">Burning For you</a></h3>
                                        <span> Lura </span>
                                        <span> 710,105 Plays </span>
                                    </li>
                                    <li class="clearfix">
                                        <a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="<?= base_url('resource/frontend/images');?>/assets/thumb-mp3-6.jpg" alt="#"></a>
                                        <h3><a href="mp3_single_half.html">Skyfool ( Dubstep Remix )</a></h3>
                                        <span> Babel </span>
                                        <span> 611,748 Plays </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- widget content -->
                </div><!-- def block widget popular items -->

            </div><!-- span4 sidebar -->
        </div><!-- row clearfix -->

    </div><!-- end page content -->

    <footer id="footer">
        <?php $this->load-> view('user/footer'); ?>

    </footer><!-- end footer -->

</div><!-- end layout -->
<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/theme20.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/jquery.jplayer.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/ttw-music-player-min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/myplaylist.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/countdown.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?= base_url('resource/frontend/js');?>/custom.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    jQuery(document).ready(function() {
        jQuery('.tp-banner').revolution({
            delay:9000,
            startwidth:1060,
            startheight:610,
            hideThumbs:10,
            navigationType:"off",
            fullWidth:"on",
            forceFullWidth:"on"
        });
        jQuery("#event1").countdown({
                date: "31 December 2017 23:59:59",
                format: "on"
            },
            function() {
                // callback function
            });
    });
    /* ]]> */
</script>
</body>
</html>
