<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

     <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/assets/css/login.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/da2275d436.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo-company">
            <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="">
        </div>

        <ul>
            <li class="close-button"><i class="fa-solid fa-xmark"></i></li>
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>home/service">Services</a></li>
            <li><a href="<?php echo base_url(); ?>home/portofolio">Portofolio</a></li>
             <li><a href="<?php echo base_url(); ?>home/team">teams</a></li>
            <li><a href="<?php echo base_url(); ?>home/contactus">Contact Us</a></li>
            <li class="login-button"><a href="<?php echo base_url(); ?>login">Login</a></li>
        </ul>

        <div class="open-button">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
    <!-- Navbar end -->


    <!-- main content -->
    <main class="content">

        <!-- logo UIB -->
        <div class="logo">
            <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="logo">
        </div>
        <!-- Logo UIB end -->

        <!-- form dimulai -->
        <div class="form">

            <!-- form open -->
            <?php echo form_open('login/index'); ?>

                <!-- menampilkan error -->
                <?php  echo validation_errors(); ?>
                <!-- menampilkan error end -->

                <!-- Masukan username / email -->
                <div class="details email">
                    <label for="email" name="email"><i class="fa-solid fa-envelope"></i></label>
                    <?php
                     echo 
                        form_input(
                            'username', 
                            set_value('username'),
                            'id="username"'
                            );
                    ?>
                </div>
                <!-- username end  -->

                <!-- masukan password -->
                <div class="details password">
                    <label for="password" name="password"><i class="fa-solid fa-key"></i></label>
                    <?php
                    echo 
                        form_password(
                            'password', 
                            set_value('password'), 
                            'class="form-control password"',
                            'id="password"'
                        );
                    ?>
                <!-- <p id="toggle_pwd" class="fa fa-fw fa-eye field-icon toggle-password"></p> -->
                <!-- toggle eyes untuk melihat password js ada dibawah tpi masih belum berfungsi -->
                </div>
                <!-- masukan password end -->

                <!-- cookies  -->
                <div class="cookies">
                    <input type="checkbox" name="check">
                    <label for="check">Remember Me</label>
                </div>
                <!-- cookies end -->


                <!-- tombol submit -->
                <button type="submit" class="button">Log In</button>
                <!-- tombol submit end -->

            <?php echo form_close(); ?>
            <!-- form close -->
        </div>
        <!-- form end -->

        <!-- tombol registrasi anggota baru -->
            <button><a href="http://localhost/ucgvolunteer/home/registrasi"> registrasi  </button>
        <!-- tombol registrasi end -->


    </main>
    <!-- main content end -->

    <!-- footer -->
    <footer class="footer">
        <div class="content">
            <div class="title-logo">
                <img src="../navbar-footer/img/logo.png" alt="">
                <h1>UIB Consultant Group</h1>
            </div>
    
            <div class="information">
                <div class="address">
                    <p>Universitas Internasional Batam</p>
                    <p>Jl. Gajah Mada, Baloi – Sei Ladi, Batam 29426</p>
                    <p>Phone : (0778) 743 7111</p>
                </div>
    
                <div class="social">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>© Universitas Internasional Batam 2022</p>
        </div>
    </footer>
    <!-- Footer end -->

    <script src="<?php echo base_url(); ?>/assets/js/navbar.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#toggle_pwd").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
               var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                $(".password").attr("type", type);
            });
        });
    </script>
</body>
</html>
