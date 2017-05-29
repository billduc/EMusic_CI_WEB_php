<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: trungduc-->
<!-- * Date: 26/05/2017-->
<!-- * Time: 15:18-->
<!-- */-->

<div class="row clearfix">
    <div class="little-head">
        <div  class="sign-btn tbutton small" style="background: #607d8b;"><span>user</span></div>



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

                <li><a href="album.html">Album</a></li>
                <li><a href="casi.html">Ca sĩ</a></li>
                <li><a href="nhacsi.html">Nhạc Sĩ</a></li>
                <li><a href="baihat.html">BXH</a></li>
                <li><a href="lienhe.html">Liên Hệ</a></li>


            </ul><!-- end menu -->
        </nav><!-- end nav -->
    </div><!-- row -->
</div><!-- headdown -->