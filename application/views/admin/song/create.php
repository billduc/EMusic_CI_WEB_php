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

        <?php echo form_open_multipart('admin/song/create'); ?>

        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" required class="form-control" id="formGroupExampleInput" name="name">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Information</label>
            <textarea rows="10" class="form-control" id="formGroupExampleInput2" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Singer</label>
            <?= form_dropdown('singer_id', $listSinger);;?>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Artist</label>
            <?= form_dropdown('artist_id', $listArtist);;?>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Song Type</label>
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
        <div class="form-group">
            <input type="submit" value="Create news" class="btn btn-primary" />
        </div>

        </form>
    </div>
</div>