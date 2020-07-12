
<?php include ('./Database.php'); 
?>
<div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <form method="post" action="">
                  <div class="box">
                    <h1>Login</h1>
                      <input type="email" name="Email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="InputField" />
                         <input type="password" name="Password" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="InputField" />
                         <button type="submit" class="btn" name="login">Login</button>
                         <a href="Register.php"><div id="btn2">Register</div></a>
                       </div>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/loginregister.js"></script>



</html>
<!-- Login pagina Backend-->
<?php
session_start();
//$password = md5($password);
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
 

if(!empty($_SESSION['Email'])) {
header('location:index.php');
}



if(isset($_POST['login'])) {
$Email = $_POST['Email'];
$Password = $_POST['Password'];

  if(empty($Email) || empty($Password)) {
  $message = 'All field are required';
  } else {
  $query = $conn->prepare("SELECT * FROM gebruikers WHERE email = '$Email' AND wachtwoord = '$Password' ");
  $query->execute(array($Email,$Password));
  $row = $query->fetch(PDO::FETCH_BOTH);

  if($query->rowCount() > 0) {

    $_SESSION['rol'] = $row['rol'];
  $_SESSION['Email'] = $row['email'];
  header('location: index.php');
} else {
  echo 'Foute invoer';
}


}

}
?>