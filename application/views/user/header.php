<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: trungduc-->
<!-- * Date: 26/05/2017-->
<!-- * Time: 15:18-->
<!-- */-->

<div class="row clearfix">
            <div class="little-head">

                <?php if ($this->session->userdata('user')):?>
                    <div class="dropdown" style="float: right">
                        <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Welcome <?=$this->session->userdata('user')->username;?>
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="<?=base_url('user_site/user/profile');?>">Profile</a></li>
                            <li><a href="<?=base_url('user_site/user/manage');?>">Quản lý tài khoản</a></li>
                            <li><a href="<?=base_url('user_site/user/logout');?>">Thoát</a></li>
                        </ul>
                    </div>
                <?php else:?>
                    <div id="Login_PopUp_Link" class="sign-btn tbutton small"><span>Sign In</span></div>
                <?php endif;?>


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