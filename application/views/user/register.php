<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration Form</title>

    <link rel="stylesheet" href="<?= base_url('resource/frontend/css');?>/demo.css">
    <link rel="stylesheet" href="<?= base_url('resource/frontend/css');?>/form-register.css">
    <link rel="stylesheet" href="<?= base_url('resource/frontend/css');?>/main.css">
<!--    <script type="text/javascript" src="assets/jquery-3.2.1.min.js"></script>-->
<!--    <script type="text/javascript" src="assets/mootools.js"></script>-->
<!--    <script type="text/javascript" src="assets/check.js"></script>-->
    <!-- <script async src="//jsfiddle.net/dimitar/n8Dza/embed/"></script> -->

</head>


<body>

<div class="main-content">

    <!-- You only need this form and the form-register.css -->

    <form class="form-register" method="post" action="" style="padding-top: 15px;">

        <div class="form-register-with-email">

            <div class="form-white-background">

                <div class="form-title-row">
                    <h1>Đăng ký tài khoản</h1>
                </div>

                <div class="form-row">
                    <label>
                        <span style="width: 130px;">Tên Đăng nhập</span>
                        <input type="text" name="name" id = "userName">
                    </label>
                </div>

                <div class="form-row">
                    <label>
                        <span style="width: 130px;">Email</span>
                        <input type="email" name="email" id = "mail">
                    </label>
                </div>

                <div class="form-row">
                    <label>
                        <span style="width: 130px;">Mật Khẩu</span>
                        <input type="password" name="password" id="password">

                    </label>
                </div>

                <div class="form-row">
                    <label class="form-checkbox">
                        <input type="checkbox" name="checkbox" checked>
                        <span>tôi đồng ý với những điểu khoản  <a href="#">terms and conditions</a></span>
                    </label>
                </div>

                <div class="form-row">
                    <button type="submit">Đặng Ký</button>
                </div>

            </div>

            <a href="#" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

        </div>

        <div class="form-sign-in-with-social">

            <div class="form-row form-title-row">
                <span class="form-title">Sign in with</span>
            </div>

            <a href="#" class="form-google-button">Google</a>
            <a href="#" class="form-facebook-button">Facebook</a>
            <a href="#" class="form-twitter-button">Twitter</a>

        </div>

    </form>

</div>

</body>

</html>
