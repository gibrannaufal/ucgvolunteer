<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>daftar anggota</title>
</head>
<body>
	<h1> anda belum terdaftar menjadi anggota silahkan daftar terlebih dahulu </h1>
	<center>
        <form action="<?php echo base_url() . 'index.php/daftar/add_data'; ?>" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>jenis kelamin</td>
                    <td>: </td>
                    <td><input type="text" name="jk"></td>
                </tr>
                <tr>
                    <td>NPM</td>
                    <td>: </td>
                    <td><input type="text" name="npm"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="login_fk" value="<?php echo $this->session->userdata("userid"); ?>"></td>
                </tr>
            </table>
        <br>
            <div><input type="submit" value="Tambah Data" class="tombol"></div>
        </form>
    </center>


</body>
</html>