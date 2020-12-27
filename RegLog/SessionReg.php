<?php

require_once("koneksi.php");

if(isset($_POST['SignUp'])){

    // filter data yang diinputkan
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  // Melakukan filter agar tidak kena serangan xss
    // enkripsi password
  $password = md5($_POST["password"]);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
  $sql = "INSERT INTO reguser (username, email, password) 
  VALUES (:username, :email, :password)";
  $stmt = $db->prepare($sql);

    // bind parameter ke query
  $params = array(
    ":username" => $username,
    ":password" => $password,
    ":email" => $email
  );

    // eksekusi query untuk menyimpan ke database
  $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
  ?>

  <script type="text/javascript">
    
    alert("\u2665 BERHASIL REGISTER \u2665");
    window.location.href="login.html"

  </script>

<?php  }
?>

?>