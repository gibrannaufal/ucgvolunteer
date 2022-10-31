<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registrasi</title>
</head>
<body>
    <h1> form registrasi anggota baru </h1>

    <center>
        <form action="<?php echo base_url() . 'index.php/registrasi/add_data'; ?>" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td>: </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>: </td>
                    <td><input type="text" name="password"></td>
                </tr>
                
            </table>
        <br>
            <div><input type="submit" value="Tambah Data" class="tombol"></div>
        </form>
    </center>

</body>
</html>