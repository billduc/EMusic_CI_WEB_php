<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đăng Nhập Admin</title>

    <link rel="stylesheet" href="<?= base_url('resource/frontend/css');?>/demo.css">
    <link rel="stylesheet" href="<?= base_url('resource/frontend/css');?>/form-login.css">

</head>

<body>


<div class="main-content" style="margin-top: 20px;">



    <form class="form-login" method="post" action="" >

        <div class="form-log-in-with-email">

            <div class="form-white-background">

                <div class="form-title-row">
                    <h1>Đăng Nhập Trang Quảng Trị</h1>
                </div>
                <?php echo validation_errors(); ?>

                <div class="error" id="login_email_error"><?php echo form_error('username'); echo '<br>';?></div>
                <div class="error" id="login_password_error"><?php echo form_error('password'); echo '<br>';?></div>

                <div class="form-row">
                    <label>
                        <span>Tên Đăng nhập</span>
                        <input type="text" name="username" id ="username">
                    </label>
                </div>

                <div class="form-row">
                    <label>
                        <span>Mật Khẩu</span>
                        <input type="password" name="password" id ="password">
                    </label>
                </div>

                <div class="form-row">
                    <div class="error" id="login_error"><?php echo form_error('login')?></div>
                    <button type="submit" name="submit">Đăng Nhập</button>
                </div>

            </div>



        </div>


    </form>

</div>

</body>

</html>
