<?php include ('./Database.php'); 
session_start();
?>
<?php if(isset($_SESSION['Email']) == "Email"){echo "";}else{header('Location: ./index.php');}?>
<?php if(isset($_SESSION['Email']) == "Email"){echo "<li><a href='./uitloggen.php'>Uitloggen</a></li><li><a href='Kopen.php'>Volgers Kopen</a></li><li><a href='./Bestellingen.php'>Bestellingen</a></li>";}else{echo "<li><a href='Login.php'>Inloggen</a></li>";}?>


<?php

if(isset($_SESSION["Email"]) == "Email"){
echo "<br>"."Ingelogd als: ". $_SESSION["Email"]. "<br>";



    $sql = "SELECT Coins FROM gebruikers WHERE email='".$_SESSION['Email']."' ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $Coins = $row["Coins"];
        echo $row["Coins"]. " Coins heeft u";
      }
    } else {
      echo "0 results";
    }
    $conn->close();}
    ?>

<form method="post" action="">
<label>Voor welk account?</label>
  	  <input type="text" name="account" value=""><br>
        <select id="Volgers" name="Volgers">
    <option value="500">500 Volgers -> 45coins</option>
    <option value="1000">1000 Volgers -> 70coins</option>
  </select>

<button type="submit" class="btn" name="koop">Kopen</button>
</form>


<?php

if(isset($_POST['koop'])) {
    $email = $_SESSION["Email"];
    $account = $_POST['account'];
    $updatecoins = 0;

    if($_POST["Volgers"] == "500"){
        if ($Coins >= 45){
            echo 'BESTELLING GEPLAATST!';
            $updatecoins = $Coins - 45;

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            try {
                $gekocht = $_POST["Volgers"];
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $sql = "UPDATE gebruikers SET 
                Coins = '$updatecoins' WHERE
                id=2";
              
                // Prepare statement
                $stmt = $conn->prepare($sql);
              
                // execute the query
                $stmt->execute();
              
                // echo a message to say the UPDATE succeeded
            
              } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
              }
            
              $date_clicked = date('Y-m-d H:i:s');;
            
              $sql = "INSERT orderklant 
              (Naam, Email, Volgers, Datum)
              VALUES ('$account', '$email', '$gekocht', '$date_clicked')";
              
              if ($conn->query($sql) === TRUE) {
                echo "Toevoegen gelukt!";
              }
              header('refresh:2;url=kopen.php');
              $conn = null;
        }
        else{echo "NIET GENOEG COINS";}
    }
    else{
        if ($Coins >= 70){
            echo 'BESTELLING GEPLAATST!';
            $updatecoins = $Coins - 70;
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            try {
                $gekocht = $_POST["Volgers"];
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $sql = "UPDATE gebruikers SET 
                Coins = '$updatecoins' WHERE
                id=2";
              
                // Prepare statement
                $stmt = $conn->prepare($sql);
              
                // execute the query
                $stmt->execute();
              
                // echo a message to say the UPDATE succeeded
            
              } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
              }
            
              $date_clicked = date('Y-m-d H:i:s');;
            
              $sql = "INSERT orderklant 
              (Naam, Email, Volgers, Datum)
              VALUES ('$account', '$email', '$gekocht', '$date_clicked')";
              
              if ($conn->query($sql) === TRUE) {
                echo "Toevoegen gelukt!";
              }
              header('refresh:2;url=kopen.php');
              $conn = null;
        }
        else{echo "NIET GENOEG COINS";}
    }

}

    ?>


    