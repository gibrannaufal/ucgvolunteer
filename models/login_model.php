<?php 
class login_model extends CI_Model
{ 
    public function cek_login($username,$password)
    {      
        $user = $this->db
        ->select("id_login, username")
        ->where(
             [
                'username' => $username,
                'password' => $password
             ]
         )
        ->get("login")
        ->row();

       if ($user) {
             $logindata = [
                 'userid' => $user->id_login,
                 'name'   => $user->username,
                 'status'  => 'login'
             ];
             $this->session
                  ->set_userdata($logindata);
     
             redirect('anggota');
       }
       else {
              echo "Username atau password yang Anda masukkan salah silahkan dicoba kembali !";
       }
    }    
}

?>
