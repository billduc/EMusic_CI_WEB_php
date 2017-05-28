<?php
/**
 * Created by PhpStorm.
 * User: nguyennghia
 * Date: 5/25/17
 * Time: 3:14 PM
 */
?>
<div class="row bg-title">
    <div class="col-md-12">
        <div class="help-block" style="color: red">
            <?php echo validation_errors(); ?>
        </div>

        <?php echo form_open_multipart('admin/album/create'); ?>

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
                        Browse <input type="file" id="ava-upload" name="thumbnail" onchange="readURL(this)">
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
