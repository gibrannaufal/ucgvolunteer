<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/contact.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/da2275d436.js" crossorigin="anonymous"></script>
</head>
<body>
    

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

    <main class="content">
        <h2>Any question? Contact us below!</h2>

        <div class="form">
            <form>
                <div class="details">
                    <label for="name" id="name" required>Name</label>
                    <input type="text" id="name">
                </div>
                
                <div class="details">
                    <label for="email" id="email" required>Email</label>
                    <input type="text" id="email">
                </div>

                <div class="details">
                    <label for="msg" id="msg" required>Message</label>
                    <textarea name="msg" id="msg"></textarea>
                </div>
                
                <div class="button">
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
    </main>

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

    <script src="<?php echo base_url(); ?>/assets/js/navbar.js"></script>
</body>
</html>