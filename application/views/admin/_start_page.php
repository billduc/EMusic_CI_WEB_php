<?php


$this->load->view('admin/_header');
?>

<body class="fix-header">

<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="<?=base_url('admin');?>">
                    <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?=base_url('resource/frontend/images/admin-logo.png');?>" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?=base_url('resource/backend/plugins/images/admin-logo-dark.png');?>" alt="home" class="light-logo" />
                    </b>
                    <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?=base_url('resource/backend/plugins/images/admin-text.png');?>" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?=base_url('resource/backend/plugins/images/admin-text-dark.png');?>" alt="home" class="light-logo" />
                     </span> </a>
            </div>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
            </div>
            <ul class="nav" id="side-menu">
                <li style="padding: 70px 0 0;">
                    <a href="<?=base_url('admin');?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>&nbsp; &nbsp;Bảng Điều Khiển</a>
                </li>
                <li>
                    <a href="<?=base_url('admin/singer');?>" class="waves-effect"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; &nbsp;Ca Sĩ</a>
                </li>
                <li>
                    <a href="<?=base_url('admin/artist');?>" class="waves-effect"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; &nbsp;Nhạc Sĩ</a>
                </li>
                <li>
                    <a href="<?=base_url('admin/album');?>" class="waves-effect"><i class="fa fa-book" aria-hidden="true"></i>&nbsp; &nbsp;Album</a>
                </li>
                <li>
                    <a href="<?=base_url('admin/song');?>" class="waves-effect"><i class="fa fa-music" aria-hidden="true"></i>&nbsp; &nbsp;Bài Hát</a>
                </li>

<!--                <li>-->
<!--                    <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Blank Page</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Error 404</a>-->
<!--                </li>-->

            </ul>
            <div class="center p-20">
                <a href="<?=base_url('admin/logout');?>" target="_blank" class="btn btn-danger btn-block waves-effect waves-light">Đăng Xuất</a>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">