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
        <h4 class="page-title">Single/Create</h4> </div>
    <!--    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">-->
    <!--        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>-->
    <!--        <ol class="breadcrumb">-->
    <!--            <li><a href="#">Dashboard</a></li>-->
    <!--        </ol>-->
    <!--    </div>-->
    <!-- /.col-lg-12 -->
</div>
<div class="row bg-title">
    <div class="col-md-12">
        <div class="help-block" style="color: red">
            <?php echo validation_errors(); ?>
        </div>

        <?php echo form_open_multipart('admin/singerCreate'); ?>

        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" required class="form-control" id="formGroupExampleInput" name="name">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Information</label>
            <textarea rows="10" class="form-control" id="formGroupExampleInput2" name="description"></textarea>
        </div>
        <div class="form-group form-upload-ava">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Upload hình đại diện (nhỏ hơn 2MB)</h3>
                </div>
                <div class="panel-body">
                    <img id="ava-preview" src="<?=base_url('resource/backend/html/images/default_avatar_male.png');?>" alt="your image" class="img-responsive img-rounded" />
                </div>
                <div class="panel-footer">
                    <label class="btn btn-default btn-file">
                        Browse <input type="file" id="ava-upload" name="avatar" onchange="readURL(this)">
                    </label>
                </div>
            </div>
            <span class="error" id="error-photo">
                                  </span>

        </div>
        <div class="form-group">
            <input type="submit" value="Create news" class="btn btn-primary" />
        </div>

        </form>
    </div>
</div>

<?php $this->load->view('admin/_end_page');;?>
