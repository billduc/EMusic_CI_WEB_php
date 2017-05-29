<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: trungduc-->
<!-- * Date: 26/05/2017-->
<!-- * Time: 15:18-->
<!-- */-->
<?php
function initHeader($k, $listSongTypeHeader)
{
    $str = '';
    foreach ($listSongTypeHeader as $songType) {
        if ($k == $songType->group) {
            $str .= '<li><a href="' . base_url('songType/listSong?id=' . $songType->id) . '">' . $songType->name . '</a></li>';
        }
    }
    return $str;
}

; ?>
<div class="row clearfix">
    <div class="little-head">

        <?php if ($this->session->userdata('user')): ?>
            <div class="dropdown" style="float: right">
                <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">
                    Xin Chào <?= $this->session->userdata('user')->username; ?>
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= base_url('user_site/user/manage'); ?>">Quản lý tài khoản</a></li>
                    <li><a href="<?= base_url('user_site/user/logout'); ?>">Thoát</a></li>
                </ul>
            </div>
        <?php else: ?>
            <div id="Login_PopUp_Link" class="sign-btn tbutton small"><span>Đăng Nhập</span></div>
        <?php endif; ?>


        <div class="search" style="display: none">
            <form action="search.html" id="search" method="get">
                <input id="inputhead" name="search" type="text"
                       onfocus="if (this.value=='Start Searching...') this.value = '';"
                       onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..."
                       placeholder="Start Searching ...">
                <button type="submit"><i class="icon-search"></i></button>
            </form><!-- end form -->
        </div><!-- search -->
    </div><!-- little head -->
</div><!-- row -->

<div class="headdown">
    <div class="row clearfix">
        <div class="logo bottomtip" title="Best and Most Popular Musics">
            <a href="#"><img src="<?= base_url('resource/frontend/images'); ?>/logo.png"
                             alt="Best and Most Popular Musics"></a>
        </div><!-- end logo -->

        <nav>
            <ul class="sf-menu">
                <li><a href="<?=base_url();?>">Trang Chủ</a></li>
                <li><a href="#">Thể Loại</a>
                    <ul>
                        <?php foreach ($listGroup as $key => $group): ?>
                            <li>
                                <a href="#"><?= $group; ?></a>
                                <ul>
                                    <?= initHeader($key, $listSongTypeHeader); ?>
                                </ul>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a href="<?= base_url('album/listAlbum'); ?>">Album</a></li>
                <li><a href="<?= base_url('singer/listSinger'); ?>">Ca sĩ</a></li>
                <li><a href="<?= base_url('artist/listArtist'); ?>">Nhạc Sĩ</a></li>
                <li><a href="<?= base_url('song/bxh'); ?>">BXH</a></li>
                <li><a href="https://www.facebook.com/ducctqb" target="_blank">Liên Hệ</a></li>
            </ul><!-- end menu -->
        </nav><!-- end nav -->
    </div><!-- row -->
</div><!-- headdown -->