<link rel="stylesheet" href="../assets/css/main2.css">
<?php include ('../Database.php'); 
?>
<?php
if(isset($_GET['id'])){
$id2 = $_GET['id'];
}
?>

<form method="post" action="">
<div class="box">
<h1>Order verwijderen: </h1>   
<button class="btn" type="submit" name="Delete" value="Delete">Delete</button>
<br>
<a href="./Bestellingen.php"><div id="btn2">Terug</div></a>
</div>


<?php

if(isset($_POST['Delete'])){

  $sql = "DELETE FROM orderklant WHERE id = $id2";

if ($conn->query($sql) === TRUE) {
  echo "Verwijderen gelukt";
  header('Location: ./Bestellingen.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>