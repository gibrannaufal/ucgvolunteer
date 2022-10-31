<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clock IN</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/clockin.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/navbardashboard.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript"> 
        function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
        }

        function display_ct() {
        var x = new Date()
        document.getElementById('ct').innerHTML = x;
        display_c();
         }
    </script>

    <script src="https://kit.fontawesome.com/da2275d436.js" crossorigin="anonymous"></script>
    
</head>
<body onload=display_ct6();>

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
                <a href="<?php echo base_url(); ?>dashboard/index/<?php
                $this->session->userdata("userid") ?>">Clock In</a>
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
        <center>  <h1>Halaman Clock In</h1> </center>

        <div class="table">
            <table id="customers">
                <thead class="thead tables">
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Clock-IN</td>
                        <td>Clock-in Time</td>
                        <td>Clock-Out</td>
                        <td>Clock-out Time</td>
                        <td>Pengerjaan</td>
                        <td>Topik Pengerjaan</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
    
                <tbody class="tbody tables">
                    <tr>
                        <?php
                                $no = 1;
                                foreach ($dkt as $d) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d->Nama ?></td>
                                        <td><?php echo $d->hari ?></td>
                                        <td><?php echo $d->waktu ?></td>
                                        <td><?php echo $d->hari_out ?></td>
                                        <td><?php echo $d->waktu_out ?></td>
                                        <td><?php echo $d->pengerjaan ?></td>
                                        <td><?php echo $d->keterangan ?></td>
                                        <td>
                                            <?php echo anchor('dashboard/out/' . $d->id_in, 'clock out', 'class="btn btn-success btn-sm"'); ?>
                                        </td>
                                    </tr>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>

        <center>
            <button class="open-button" onclick="openForm()">Clock IN</button>
        </center>
        
        <div class="clockin-box">
            <div class="form-popup" id="myForm">
                
                <form action="<?php echo base_url(). 'dashboard/add_data/'; ?>" method="post" class="form-container">
                    <div class="all-input">
                        <h1>Clock-in</h1>
                        <div class="input">
                            <label for="Nama">Nama</label>
                            <input type="text" placeholder="Enter Nama" name="Nama" 
                                value="<?php  echo $this->session->userdata("name") ?>" readonly>
                        </div>

                        <div class="input">
                            <label for="clock-in">Clock-in</label>
                            <input type="time" name="waktu" id="waktu" step='2' min="00:00:00" max="24:00:00">
                            
                        </div>

                        <div class="input">
                            <label for="hari-tanggal">Hari/tanggal</label>
                            <input type="date" placeholder="Enter keterangan" name="hari" id="hari">
                        </div>

                        <input type="hidden" placeholder="Enter anggota_fk" name="anggota_fk" 
                                value="<?php  echo $this->session->userdata("userid") ?>" readonly>
    
                        <div class="input">
                            <label for="pengerjaan">Pengerjaan</label>
                            <select name="pengerjaan" id="pengerjaan" required>
                                <option value="" hidden>Opsi</option>
                                <option value="meeting">Meeting</option>
                                <option value="individu">Individu</option>
                            </select>
                        </div>
    
                        <div class="input">
                            <label for="topik-tugas">Topik/Tugas Pengerjaan</label>
                            <textarea placeholder="Enter keterangan" name="keterangan" id="keterangan"> </textarea>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn">CLOCK IN</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                </form>
            </div>
        </div>
    </main>

    <script src="<?php echo base_url(); ?>/assets/js/navbardashboard.js"></script>

    <script type="text/javascript">

    //hari
    const y = new Date();
    var y2=y.getMonth() + 1+ "/" + y.getDate() + "/" + y.getFullYear(); 
    document.getElementById("dt6").innerHTML = y2;
    function formatDate(date) 
    {
        var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2) 
            month = '0' + month;
        if (day.length < 2) 
            day = '0' + day;

        return [year,month,day].join('-');
    }
    

    //form pop up

    //form open
    function openForm() 
    {
        
        document.getElementById("myForm").style.display = "block";
        document.getElementById("hari").value = (formatDate(y2));
    }
    //form close
    function closeForm() 
    {
        document.getElementById("myForm").style.display = "none";
    }

</script>
</body>
</html>