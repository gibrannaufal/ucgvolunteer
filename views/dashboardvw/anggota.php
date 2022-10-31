<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/profile.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/navbardashboard.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <script src="https://kit.fontawesome.com/da2275d436.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar">
        <div class="logo-toggle">
            <div class="logo-company">
                <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="">
            </div>

            <div class="toggle-dashboard">
                <div class="toggler-dashboard"></div>
            </div>
        </div>

        <ul>
            <li class="close-button"><i class="fa-solid fa-xmark"></i></li>
            <li class="title-dashboard">Dashboard</li>
            <li><a href="<?php echo base_url(); ?>anggota/index">Profile</a></li>
            <li>
                <a href="<?php echo base_url(); ?>dashboard/index/<?php $dkt->login_fk; ?>">Clock In</a>
            </li>
            <li class="signout-button">
                <a href="<?php echo base_url(); ?>anggota/logout">Sign Out</a>
            </li>
        </ul>

        <div class="signout-button"><a href="<?php echo base_url(); ?>anggota/logout">Sign Out</a></div>

        <div class="open-button">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
    
    <main class="content">
        <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="<?php echo base_url(); ?>assets/img/person.jpg">
                <span class="font-weight-bold"><?php echo $dkt->nama ?></span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Anggota</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nama</label>
                        <input type="text" class="form-control" value="<?php echo $dkt->nama ?>"readonly>
                    </div>
                    <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                        <input type="text" class="form-control" value="<?php echo $dkt->jk ?>"readonly>
                    </div>
                    <div class="col-md-12"><label class="labels">NPM</label>
                        <input type="text" class="form-control" value="<?php echo $dkt->npm ?>"readonly>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
           
    </main>
    
   <script src="<?php echo base_url(); ?>/assets/js/navbardashboard.js"></script>
</body>
</html>