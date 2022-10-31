<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/home.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/da2275d436.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

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

    <header class="header">
        <img src="<?php echo base_url(); ?>/assets/img/header.jpg" alt="header">
        <div class="header-info">
            <h1>UIB Consultant Group</h1>
            <a class="contact-us-button" href="<?php echo base_url(); ?>home/contactus">Contact Us</a>
        </div>
    </header>

    <main class="content">
        
        <div class="boxes-list">
            <section class="box-info">

                <div class="foto">
                    <img src="<?php echo base_url(); ?>/assets/img/uib.jpg" alt="foto terkait">
                </div>
    
                <div class="info">
                    <h2>Sekilas Tentang UIB</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat nostrum odit corporis? Veritatis fuga debitis non nemo nihil sapiente, consequuntur cum odio quos porro cumque, accusantium saepe labore officiis? Officiis distinctio ipsa cupiditate provident! Quidem ipsa doloremque exercitationem rem quam commodi earum, tempora illum laudantium nulla asperiores facere quod repellendus.</p>
                </div>
    
            </section>

            <section class="box-info">

                <div class="foto">
                    <img src="<?php echo base_url(); ?>/assets/img/uib.jpg" alt="foto terkait">
                </div>
    
                <div class="info">
                    <h2>Sekilas Tentang Batam</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat nostrum odit corporis? Veritatis fuga debitis non nemo nihil sapiente, consequuntur cum odio quos porro cumque, accusantium saepe labore officiis? Officiis distinctio ipsa cupiditate provident! Quidem ipsa doloremque exercitationem rem quam commodi earum, tempora illum laudantium nulla asperiores facere quod repellendus.</p>
                </div>
    
            </section>

            <section class="box-info">

                <div class="foto">
                    <img src="<?php echo base_url(); ?>/assets/img/uib.jpg" alt="foto terkait">
                </div>
    
                <div class="info">
                    <h2>Sekilas Tentang UCG</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat nostrum odit corporis? Veritatis fuga debitis non nemo nihil sapiente, consequuntur cum odio quos porro cumque, accusantium saepe labore officiis? Officiis distinctio ipsa cupiditate provident! Quidem ipsa doloremque exercitationem rem quam commodi earum, tempora illum laudantium nulla asperiores facere quod repellendus.</p>
                </div>
    
            </section>

            <section class="box-info">

                <div class="foto">
                    <img src="<?php echo base_url(); ?>/assets/img/uib.jpg" alt="foto terkait">
                </div>
    
                <div class="info">
                    <h2>Visi</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat nostrum odit corporis? Veritatis fuga debitis non nemo nihil sapiente, consequuntur cum odio quos porro cumque, accusantium saepe labore officiis? Officiis distinctio ipsa cupiditate provident! Quidem ipsa doloremque exercitationem rem quam commodi earum, tempora illum laudantium nulla asperiores facere quod repellendus.</p>
                </div>
    
            </section>

            <section class="box-info">

                <div class="foto">
                    <img src="<?php echo base_url(); ?>/assets/img/uib.jpg" alt="foto terkait">
                </div>
    
                <div class="info">
                    <h2>Misi</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat nostrum odit corporis? Veritatis fuga debitis non nemo nihil sapiente, consequuntur cum odio quos porro cumque, accusantium saepe labore officiis? Officiis distinctio ipsa cupiditate provident! Quidem ipsa doloremque exercitationem rem quam commodi earum, tempora illum laudantium nulla asperiores facere quod repellendus.</p>
                </div>
    
            </section>
        </div>

        <section class="testimonial-swiper">
            <h2>Testimonial</h2>

            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                            <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto terkait">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                            <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                            <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                             <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                             <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                             <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                             <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                            < <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                            < <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                            < <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                            < <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="foto">
                            < <img src="<?php echo base_url(); ?>/assets/img/person.jpg" alt="foto">
                        </div>
                        <div class="info">
                            <h3>Lisa Simpson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel libero labore eveniet voluptatibus fugit cumque excepturi quia iste!</p>
                        </div>

                    </div>
                </div>

              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
        </section>
    </main>


    <footer class="footer">
        <div class="content">
            <div class="title-logo">
                 <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="foto">
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/home.js"></script>
</body>
</html>