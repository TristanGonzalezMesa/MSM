<?php include ('Database.php'); 
session_start();
?>

<?php if(isset($_SESSION['Email']) == "Email"){echo "<li><a href='./uitloggen.php'>Uitloggen</a></li><li><a href='Kopen.php'>Volgers Kopen</a></li><li><a href='./Bestellingen.php'>Bestellingen</a></li>";}else{echo "<li><a href='Login.php'>Inloggen</a></li>";}?>
<?php if(isset($_SESSION['rol'])){if ($_SESSION['rol'] == 9) {echo "<li><a href='Adminpage/index.php'>CMS</a></li>";}}?>



<h1> Volgers kopen? </h1>
<?php 

if(isset($_SESSION["Voornaam"]) == "Voornaam"){
    echo "Hallo " . $_SESSION["Voornaam"];
}
?>
