<link rel="stylesheet" href="../assets/css/main2.css">
<?php include ('../Database.php'); 
session_start();
?>
<p> Adminpage </p>
<li><a href='../Adminpage/NieweBestellingen.php'>Nieuwe Bestellingen</a></li>
<li><a href='../Adminpage/Bestellingen.php'>Bestellingen</a></li>


<?php if(isset($_SESSION['rol']) == "9"){echo "";}else{header('Location: ../index.php');}?>
<?php if(isset($_SESSION['Email']) == "Email"){echo "<li><a href='../uitloggen.php'>Uitloggen</a></li>";}else{echo "<li><a href='Login.php'>Inloggen</a></li>";}?>
<?php if(isset($_SESSION['rol'])){if ($_SESSION['rol'] == 9) {echo "<li><a href='../Adminpage/index.php'>CMS</a></li>";}}?>