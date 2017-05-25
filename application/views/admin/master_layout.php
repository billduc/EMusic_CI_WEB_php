<?php
/**
 * Created by dinhty.luu@gmail.com
 * Date: 24/05/2017
 * Time: 17:06
 */

$this->load->view('admin/_start_page');
?>

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?= isset($title) ? $title : "Music";  ?></h4> </div>
    <!--    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">-->
    <!--        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>-->
    <!--        <ol class="breadcrumb">-->
    <!--            <li><a href="#">Dashboard</a></li>-->
    <!--        </ol>-->
    <!--    </div>-->
    <!-- /.col-lg-12 -->
</div>

<?php if(isset($content_view)){
    $this->load->view($content_view);
} ?>

<?php $this->load->view('admin/_end_page');;?>
