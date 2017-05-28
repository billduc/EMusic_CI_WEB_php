<?php

?>
<div class="row">
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Total Singer</h3>
            <ul class="list-inline two-part">
                <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span
                            class="counter text-success"><?= $totalSinger; ?></span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Total Artist</h3>
            <ul class="list-inline two-part">
                <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span
                            class="counter text-purple"><?=$totalArtist;?></span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Total Album</h3>
            <ul class="list-inline two-part">
                <i class="fa fa-book fa-5x" aria-hidden="true"></i>
                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span
                            class="counter text-info">911</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Total Song</h3>
            <ul class="list-inline two-part">
                <i class="fa fa-music fa-5x" aria-hidden="true"></i>
                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span
                            class="counter text-purple"><?=$totalSong;?></span></li>
            </ul>
        </div>
    </div>
</div>
