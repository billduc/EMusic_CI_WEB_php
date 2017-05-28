<!-- popup login -->
<div id="popupLogin">
    <div class="def-block widget">
        <h4> Sign In </h4><span class="liner"></span>
        <div class="widget-content row-fluid">
            <?php echo validation_errors(); ?>
            <form id="popup_login_form" action="<?=base_url('user_site/user/login');?>" method="post">
                <input type="text" name="login_username" id="login_username" placeholder="username">
                <input type="password" name="login_password" id="login_password"  placeholder="password">
                <!--                    <a href="#" class="tbutton small" name="submit"><span>Sign In</span></a>-->
                <input type="submit" class="tbutton small" name="submit" value="Đăng Nhập">
                <a style="float: right;margin-right: 156px;" href="<?=base_url('user_site/create_user/register');?>" class="tbutton color2 small"><span>Register</span></a>
            </form><!-- login form -->
        </div><!-- content -->
    </div><!-- widget -->
    <div id="popupLoginClose">x</div>
</div><!-- popup login -->
<div id="LoginBackgroundPopup"></div>
<!-- popup login -->