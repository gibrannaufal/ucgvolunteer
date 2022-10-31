<!DOCTYPE html>
<html>

<head>
    <title> Data Dokter </title>
    <style>
        table {
            border-collapse: collapse;
        }

        td,
        th {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        body {
            font-family: arial;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <center>
        <br>
        <h1> CLOCK-OUT </h1>
        <br>
        <table style border="1">
            <!-- form open -->
            
            <?php echo form_open('dashboard/out/'.$dkt->id_in);?>

                <!-- menampilkan error -->
                <?php  echo validation_errors(); ?>
                <!-- menampilkan error end -->
                        <table>
                            <tr>
                                <td>id</td>
                                <td>: </td>
                                <td><?php echo 
                                        form_input(
                                            'id_in',
                                            set_value('id',$dkt->id_in),
                                            'readonly'
                                        ); 
                                    ?>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>: </td>
                                <td>
                                     <!-- Masukan nama -->
                                    <?php echo 
                                            form_input(
                                                'Nama',
                                                set_value('Nama',$dkt->Nama),
                                                'readonly'
                                            ); 
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>waktu out</td>
                                <td>: </td>
                                <td>
                                     <!-- Masukan waktu out -->
                                    <?php 
                                    $data = array(
                                            'type'  => 'time',
                                            'name'  => 'waktu out',
                                            'value' => '$dkt->waktu_out',
                                            'step'  =>  '2',
                                            'min'   => '00:00:00',
                                            'max'   => '24:00:00'
                                    );
                                    echo form_input($data); 
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>tanggal out</td>
                                <td>: </td>
                                <td>
                                     <!-- Masukan tanggal out -->
                                    <?php echo 
                                            form_input(
                                                'hari_out',
                                                set_value('hari_out',$dkt->hari_out),
                                                'id="hari"'
                                            ); 
                                    ?>
                                </td>
                            </tr>
                            
                        </table>
                        <br>
                        <div> <button type="submit" class="button">clock out</button></div>
                    <?php echo form_close(); ?>
            
        </table>
        <br>
        <div><?php echo anchor('dashboard/index', 'kembali', 'class="btn btn-success btn-sm"'); ?></div>
    </center>
</body>
<script type="text/javascript">

    //hari
    const y = new Date();
    var y2=y.getMonth() + 1+ "/" + y.getDate() + "/" + y.getFullYear(); 
     document.getElementById("hari").value = (formatDate(y2));
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

        return [year, month, day].join('-');
    }

    
</script>


</html>