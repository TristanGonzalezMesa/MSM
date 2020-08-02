<h1> Bestellingen </h1>

<?php include ('../Database.php'); 
session_start();
?>
<?php if(isset($_SESSION['Email']) == "Email"){echo "";}else{header('Location: ../../index.php');}?>
<?php if(isset($_SESSION['Email']) == "Email"){echo "<li><a href='../uitloggen.php'>Uitloggen</a></li><li><a href='../Kopen.php'>Volgers Kopen</a></li>";}else{echo "<li><a href='Login.php'>Inloggen</a></li>";}?>
<?php if(isset($_SESSION['rol'])){if ($_SESSION['rol'] == 9) {echo "<li><a href='../Adminpage/index.php'>CMS</a></li>";}}?>
<?php
if(isset($_SESSION["Email"]) == "Email"){

    $sql = "SELECT * FROM orderklant";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if ($row["Volgers"] == 500){
            $kosten = "45 coins";
        }
        else{
            $kosten = "70 coins";
        }
        echo "<br>";
        echo "Account: ". $row["Naam"] . "<br>";
        echo "Aantal: ". $row["Volgers"]. "<br>";
        echo "Kostte: ". $kosten ."<br>";
        echo "Datum: ". $row["Datum"]."<br>";
        echo "Status Bestelling: ". $row["StatusOrder"]. "<br>"."<br>";
      }
    } else {
      echo "Nog geen bestellingen";
    }
    $conn->close();}
    ?>