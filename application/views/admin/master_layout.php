
<?php /**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 26/05/2017
 * Time: 03:27
 */
$this->load->view('admin/_start_page');

?>

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?= isset($title) ? $title : "Music";  ?></h4> </div>
</div>

<?php if(isset($content_view)){
    $this->load->view($content_view);
} ?>

<?php $this->load->view('admin/_end_page');;?>
