<?php
/**
 * Created by dinhty.luu@gmail.com
 * Date: 24/05/2017
 * Time: 15:42
 */
$this->load->view('admin/_start_page');
?>
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard</h4> </div>
<!--    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">-->
<!--        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>-->
<!--        <ol class="breadcrumb">-->
<!--            <li><a href="#">Dashboard</a></li>-->
<!--        </ol>-->
<!--    </div>-->
    <!-- /.col-lg-12 -->
</div>
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Singer</h3>
                <ul class="list-inline two-part">
                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Artist</h3>
                <ul class="list-inline two-part">
                    <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Album</h3>
                <ul class="list-inline two-part">
                    <i class="fa fa-book fa-5x" aria-hidden="true"></i>
                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Song</h3>
                <ul class="list-inline two-part">
                    <i class="fa fa-music fa-5x" aria-hidden="true"></i>
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                </ul>
            </div>
        </div>
    </div>

<?php $this->load->view('admin/_end_page');;?>