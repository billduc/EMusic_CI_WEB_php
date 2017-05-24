<?php
/**
 * Created by dinhty.luu@gmail.com
 * Date: 24/05/2017
 * Time: 16:23
 */
?>


<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            if(validateExtension(input.files[0].type)){
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#ava-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
                $("#error-photo").html("");
            }else{
                $("#error-photo").html("Hình ảnh không hỗ trở");
            }
        }
    }
    function readURLEdit(input) {
        if (input.files && input.files[0]) {
            if(validateExtension(input.files[0].type)){
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#ava-preview-edit').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
                $("#error-photo-edit").html("");
            }else{
                $("#error-photo-edit").html("Hình ảnh không hỗ trở");
            }
        }
    }
    function validateExtension(fileInput) {
        var allowedFiles = ["jpg","png","jpeg","bmp"];
        var filetype = fileInput.split("/")[1];
        if(fileInput.length == 0 || filetype === undefined){
            return false;
        }

        for(var i =0; i<allowedFiles.length;i++){
            if (filetype == allowedFiles[i]) {
                return true;
            }
        }
        return false;
    }
</script>
<script src="<?=base_url('resource/backend/plugins/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url('resource/backend/html/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?=base_url('resource/backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js');?>"></script>
<!--slimscroll JavaScript -->
<script src="<?=base_url('resource/backend/html/js/jquery.slimscroll.js');?>"></script>
<!--Wave Effects -->
<script src="<?=base_url('resource/backend/html/js/waves.js');?>"></script>
<!--Counter js -->
<script src="<?=base_url('resource/backend/plugins/bower_components/waypoints/lib/jquery.waypoints.js');?>"></script>
<script src="<?=base_url('resource/backend/plugins/bower_components/counterup/jquery.counterup.min.js');?>"></script>
<!-- chartist chart -->
<script src="<?=base_url('resource/backend/plugins/bower_components/chartist-js/dist/chartist.min.js');?>"></script>
<script src="<?=base_url('resource/backend/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js');?>"></script>
<!-- Sparkline chart JavaScript -->
<script src="<?=base_url('resource/backend/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js');?>"></script>
<!-- Custom Theme JavaScript -->
<script src="<?=base_url('resource/backend/html/js/custom.min.js');?>"></script>
<script src="<?=base_url('resource/backend/html/js/dashboard1.js');?>"></script>
<script src="<?=base_url('resource/backend/plugins/bower_components/toast-master/js/jquery.toast.js');?>"></script>
