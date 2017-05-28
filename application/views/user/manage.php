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
    <title><?= 'Manage' ?></title>
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
    <link href="<?= base_url('resource/backend/html/dataTable/css/jquery.dataTables.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('resource/backend/html/dataTable/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">

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

    <div class="page-content">
        <div class="page-content">
            <div class="row clearfix mb">
                <div class="breadcrumbIn">
                    <ul>
                        <li><a href="<?= base_url(); ?>" class="toptip" title="Trang chu"> <i class="icon-home"></i>
                            </a>
                        </li>
                        <li><?= isset($title) ? $title : 'Danh sách bài hát'; ?></li>
                    </ul>
                </div><!-- breadcrumb -->
            </div><!-- row -->


            <div class="row bg-title">
                <div class="col-md-12">
                    <a href="createSong" class="btn btn-primary">Create Song</a>
                    <br/>
                    <br/>
                    <div class="table-responsive tblmanager">
                        <table id="listSinger-dataTable" class="table"
                               cellspacing="0" width="100%">
                        </table>
                    </div>
                </div>
            </div>
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
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="<?= base_url('resource/backend/html/dataTable/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('resource/backend/html/dataTable/js/dataTables.tableTools.js'); ?>"></script>
<script src="<?= base_url('resource/backend/html/dataTable/js/dataTables.bootstrap.js'); ?>"></script>
<script>
    var dataSet = [], dataTable;
    function getAndSetData() {
        dataSet = [];
        var baseUrl = "<?=base_url();?>";
        var data = <?=json_encode($listSong);?>;
        var artist = <?=json_encode($listArtist);?>;
        var singer = <?=json_encode($listSinger);?>;
        var songType = <?=json_encode($listSongType);?>;
        for (var index = 0; index < data.length; index++) {
            var tempObject = [];
            tempObject.push(data[index].id);
            tempObject.push(data[index].name);
            var imageSource = '<a href="' + baseUrl + data[index].file_media + '">' + data[index].name + '</a>';
            tempObject.push(imageSource);
            tempObject.push(data[index].description);
            Object.keys(artist).map(function(k) {
                if (data[index].artist_id == k){
                    tempObject.push(artist[k]);
                }
            });
            Object.keys(singer).map(function(k) {
                if (data[index].singer_id == k){
                    tempObject.push(singer[k]);
                }
            });
            Object.keys(songType).map(function(k) {
                if (data[index].type_id == k){
                    tempObject.push(songType[k]);
                }
            });
            dataSet.push(tempObject);
        }
        var table = $('#listSinger-dataTable');
        table.dataTable().fnClearTable();
        table.dataTable().fnAddData(dataSet);
    }
    if (dataSet.length >= 0) {
        $('#listSinger-dataTable').DataTable({
            initComplete: function () {
                getAndSetData();
            },
            "iDisplayLength": 100,
            "bFilter": true,
            "data": dataSet,
            "ordering": true,
            "paging": true,
            "columns": [
                {"title": "ID"},
                {"title": "Name"},
                {"title": "File Mp3"},
                {"title": "Description"},
                {"title": "Artist"},
                {"title": "Singer"},
                {"title": "Song Type"},
                {"title": "Công cụ"}
            ],
            "aoColumnDefs": [
                {
                    "aTargets": [7],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        if (data.length >= 0) {
                            return '<a type="button" id="editCmt" action="update" class="btn btn-warning" href="updateSong?id=' + data[0] + '">Sửa</a>' +
                                '<a type="button" id="delCmt" action="update" class="btn btn-danger" href="/song/delete?id=' + data[0] + '">Xóa</a>'
                        }
                        // '<button type="button" id="accessPost" action="update" class="btn btn-success">Truy cập bài viết</button>'
                    }
                }
            ]
        });
    }

</script>


</body>
</html>
