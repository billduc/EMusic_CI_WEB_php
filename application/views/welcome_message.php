
<head>
    <title>Remix</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Seo Meta -->
    <meta name="description" content="Remix - Music & Band Site Template HTML5 and CSS3">
    <meta name="keywords" content="remix, music, light, dark, themeforest, multi purpose, band, css3, html5">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('resource/frontend/css');?>/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('resource/frontend/css');?>/bootstrap-responsive.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('resource/frontend/css');?>/style.css" id="dark" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('resource/frontend/css');?>/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('resource/frontend/css');?>/icons.css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('resource/frontend/images');?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?= base_url('resource/frontend/images');?>/apple-touch-icon.png">

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css" />
    <![endif]-->
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
        <div class="row clearfix">
            <div class="little-head">
                <div id="Login_PopUp_Link" class="sign-btn tbutton small"><span>Sign In</span></div>



                <div class="search">
                    <form action="search.html" id="search" method="get">
                        <input id="inputhead" name="search" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
                        <button type="submit"><i class="icon-search"></i></button>
                    </form><!-- end form -->
                </div><!-- search -->
            </div><!-- little head -->
        </div><!-- row -->

        <div class="headdown">
            <div class="row clearfix">
                <div class="logo bottomtip" title="Best and Most Popular Musics">
                    <a href="#"><img src="<?= base_url('resource/frontend/images');?>/logo.png" alt="Best and Most Popular Musics"></a>
                </div><!-- end logo -->

                <nav>
                    <ul class="sf-menu">
                        <li><a href="index.html">Trang Chủ</a></li>
                        <li><a href="index.html">Thể Loại</a>
                            <ul>
                                <li><a href="#">Việt Nam</a>
                                    <ul>
                                        <li><a href="shortcode_accordion.html">Nhạc Trẻ</a></li>
                                        <li><a href="shortcode_buttons.html">Trữ Tình</a></li>
                                        <li><a href="shortcode_tables.html">Remix Việt</a></li>
                                        <li><a href="shortcode_lightbox.html">Rap Việt</a></li>
                                        <li><a href="shortcode_googlemap.html">Tiền Chiến</a></li>
                                        <li><a href="shortcode_video.html">Nhạc Trịnh</a></li>
                                        <li><a href="shortcode_social_icons.html">Thiếu Nhi</a></li>
                                        <li><a href="shortcode_tab.html">Rock Việt</a></li>
                                        <li><a href="shortcode_toggle.html">Cách Mạnh</a></li>

                                    </ul>
                                </li>
                                <li><a href="shop.html">Âu Mỹ</a>
                                    <ul>
                                        <li><a href="shop.html">Pop</a></li>
                                        <li><a href="shop_product.html">Rock</a></li>
                                        <li><a href="shop_cart.html">Electronica/Dance</a></li>
                                        <li><a href="shop_checkout.html">R&B/Hhip Hop/Rap</a></li>
                                        <li><a href="shop_cart.html">Blue/Jazz</a></li>
                                        <li><a href="shop_cart.html">Country</a></li>
                                        <li><a href="shop_cart.html">Latin</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Châu Á</a>
                                    <ul>
                                        <li><a href="shop_cart.html">Nhạc Hàn</a></li>
                                        <li><a href="shop_cart.html">Nhạc Hoa</a></li>
                                        <li><a href="shop_cart.html">Nhạc Nhật</a></li>
                                        <li><a href="shop_cart.html">Nhạc Thái</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Khác</a>
                                    <ul>
                                        <li><a href="shop_cart.html">Không Lời</a></li>
                                        <li><a href="shop_cart.html">Nhạc Phim</a></li>
                                        <li><a href="shop_cart.html">Thể Loại Khác</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="album.html">Album</a></li>
                        <li><a href="casi.html">Ca sĩ</a></li>
                        <li><a href="nhacsi.html">Nhạc Sĩ</a></li>
                        <li><a href="baihat.html">BXH</a></li>
                        <li><a href="lienhe.html">Liên Hệ</a></li>


                    </ul><!-- end menu -->
                </nav><!-- end nav -->
            </div><!-- row -->
        </div><!-- headdown -->
    </header><!-- end header -->

    <!-- Start Revolution Slider -->
    <div class="sliderr">
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
                        <!-- MAIN IMAGE -->
                        <img src="<?= base_url('resource/frontend/images');?>/slider1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- <div class="tp-caption fade"
                            data-x="566"
                            data-y="306"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="800"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11"><img src="<?= base_url('resource/frontend/images');?>/slider1-cap1.png" alt=""></div>

                        <div class="tp-caption lfb"
                            data-x="566"
                            data-y="305"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="1200"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11"><img src="<?= base_url('resource/frontend/images');?>/slider1-cap2.png" alt=""></div>

                        <div class="tp-caption lft"
                            data-x="741"
                            data-y="305"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="1200"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11"><img src="<?= base_url('resource/frontend/images');?>/slider1-cap3.png" alt=""></div>

                        <div class="tp-caption lfb"
                            data-x="711"
                            data-y="374"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="2000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11"><img src="<?= base_url('resource/frontend/images');?>/slider1-cap4.png" alt=""></div>

                        <div class="tp-caption lft"
                            data-x="714"
                            data-y="374"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="2000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11"><img src="<?= base_url('resource/frontend/images');?>/slider1-cap5.png" alt=""></div> -->
                    </li>

                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
                        <!-- MAIN IMAGE -->
                        <img src="<?= base_url('resource/frontend/images');?>/slider9.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- <div class="tp-caption modern_big_bluebg randomrotate"
                            data-x="603"
                            data-y="384"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="1200"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11">Responsive Design</div>

                        <div class="tp-caption modern_big_redbg randomrotate"
                            data-x="701"
                            data-y="328"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="1700"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11">Retina Ready</div> -->
                    </li>

                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
                        <!-- MAIN IMAGE -->
                        <img src="<?= base_url('resource/frontend/images');?>/slider3.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- <div class="tp-caption modern_big_redbg randomrotate"
                            data-x="560"
                            data-y="253"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="1000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11">Revolution Slider</div>

                        <div class="tp-caption modern_m_bluebg randomrotate"
                            data-x="560"
                            data-y="310"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="1500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11">Awesome MusicPlayer</div>

                        <div class="tp-caption modern_m_bluebg randomrotate"
                            data-x="560"
                            data-y="355"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="2000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11">Wonderful Gallery</div>

                        <div class="tp-caption modern_m_bluebg randomrotate"
                            data-x="560"
                            data-y="400"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="2500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11">Seo Optimized</div>

                        <div class="tp-caption modern_m_bluebg randomrotate"
                            data-x="560"
                            data-y="445"
                            data-hoffset="0"
                            data-speed="700"
                            data-start="3000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"
                            style="z-index: 11">and Much More ...</div> -->
                    </li>

                </ul><!-- End Slides -->
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </div>
    <!-- End Revolution Slider -->

    <div class="page-content">
        <div class="row clearfix mbf">
            <div class="music-player-list"></div>
        </div><!-- row music player -->

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
                    <h4> Events </h4><span class="liner"></span>
                    <div class="widget-content row-fluid">
                        <div class="span12 mb">
                            <ul id="event1" class="event-timer">
                                <li>
                                    <span class="days">00</span>
                                    <p class="timeRefDays">days</p>
                                </li>
                                <li>
                                    <span class="hours">00</span>
                                    <p class="timeRefHours">hours</p>
                                </li>
                                <li>
                                    <span class="minutes">00</span>
                                    <p class="timeRefMinutes">min</p>
                                </li>
                                <li>
                                    <span class="seconds">00</span>
                                    <p class="timeRefSeconds">sec</p>
                                </li>
                            </ul> <!-- end timer -->
                        </div><!-- timer -->

                        <div class="grid_8">
                            <p class="event-titlett">Bono Serenades Warren</p>
                        </div>
                        <div class="grid_4">
                            <a href="#" class="tbutton buy-ticket small"><span>Buy Ticket</span></a>
                        </div>

                    </div><!-- widget content -->
                </div><!-- def block widget events -->

                <div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
                    <h4> Featured Videos </h4><span class="liner"></span>
                    <div class="widget-content row-fluid">
                        <div class="videos clearfix flexslider">
                            <ul class="slides">
                                <li class="featured-video">
                                    <a href="video_single_wide.html">
                                        <img src="<?= base_url('resource/frontend/images');?>/assets/video1.jpg" alt="#">
                                        <i class="icon-play-sign"></i>
                                        <h3>I Know You Want Me</h3>
                                        <span>Fitbull</span>
                                    </a>
                                </li><!-- slide -->
                                <li class="featured-video">
                                    <a href="video_single_wide.html">
                                        <img src="<?= base_url('resource/frontend/images');?>/assets/video2.jpg" alt="#">
                                        <i class="icon-play-sign"></i>
                                        <h3>I Like It</h3>
                                        <span>Enrique</span>
                                    </a>
                                </li><!-- slide -->
                                <li class="featured-video">
                                    <a href="video_single_wide.html">
                                        <img src="<?= base_url('resource/frontend/images');?>/assets/video3.jpg" alt="#">
                                        <i class="icon-play-sign"></i>
                                        <h3>Tommorow</h3>
                                        <span>Dj Michele</span>
                                    </a>
                                </li><!-- slide -->
                            </ul>
                        </div>
                    </div><!-- widget content -->
                </div><!-- def block widget videos -->

                <div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
                    <h4> Popular Tracks </h4><span class="liner"></span>
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
        <div class="footer-last">
            <div class="row clearfix">
                <span class="copyright">© 2013 by <a href="http://theme20.com/">Theme20</a>. All Rights Reserved. Powered by <a href="http://themeforest.net/user/behzadg?ref=behzadg">Themeforest</a>.</span>
                <div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->

                <div class="foot-menu">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="index.html">Thế loại</a></li>
                        <li><a href="Album.html">Album</a></li>
                        <li><a href="casi.html">Ca Sĩ</a></li>
                        <li><a href="nhacsi.html">Nhạc Sĩ</a></li>
                        <li><a href="baihat.html">Bảng Xếp hạng</a></li>
                        <li><a href="lienhe.html">Liên hệ</a></li>
                    </ul><!-- end links -->
                </div><!-- end foot menu -->
            </div><!-- row -->
        </div><!-- end last -->

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