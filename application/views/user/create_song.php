
<?php
/**-->
 * Created by PhpStorm.-->
 * User: trungduc-->
 * Date: 26/05/2017-->
 * Time: 15:22-->
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
    <title><?= 'Create Song'; ?></title>
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
        <!--<img src="images/assets/breadcrumbs2.png" alt="#">-->
    </div><!-- under header -->

    <div class="page-content back_to_up">
        <div class="row clearfix mb">
            <div class="breadcrumbIn">
                <ul>
                    <li><a href="<?= base_url(); ?>" class="toptip" title="Trang chu"> <i class="icon-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('user_site/user/manage'); ?>">Danh sách bài hát
                        </a>
                    </li>
                    <li><?= isset($title) ? $title : 'Tạo bài hát'; ?></li>
                </ul>
            </div><!-- breadcrumb -->
        </div><!-- row -->
        <div class="row bg-title">
            <div class="col-md-12">
                <div class="help-block" style="color: red">
                    <?php echo validation_errors(); ?>
                </div>

                <?php echo form_open_multipart('user_site/user/createSong'); ?>

                <div class="form-group">
                    <label for="formGroupExampleInput">Tên Bài hát</label>
                    <input style="width: 75%" type="text" required class="form-control" id="formGroupExampleInput" name="name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Thông Tin</label>
                    <textarea style="width: 75%" rows="10" class="form-control" id="formGroupExampleInput2" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Ca Sĩ</label>
                    <?= form_dropdown('singer_id', $listSinger);;?>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Nhạc Sĩ</label>
                    <?= form_dropdown('artist_id', $listArtist);;?>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Thể Loại</label>
                    <?= form_dropdown(['name' => 'type_id'], $listSongType);;?>
                </div>
                <div class="form-group form-upload-ava">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Upload File Nhac (nhỏ hơn 20MB)</h3>
                        </div>
                        <div class="panel-body">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" class="form-control-file btn btn-success" id="exampleInputFile" name="file_media" aria-describedby="fileHelp">
                        </div>
                    </div>

                </div>
                <div class="form-group" style="margin-top: 45px">
                    <input type="submit" value="Tạo Bài Hát" class="btn btn-primary" />
                </div>

                </form>
            </div>
        </div>
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

