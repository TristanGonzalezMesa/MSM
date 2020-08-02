<?php include ('../Database.php'); 

if(isset($_GET['id'])){
$id2 = $_GET['id'];
$id3 = $_GET['id'];
}

try{
    $sql = "SELECT * FROM orderklant WHERE id=$id2";   
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
        while($row = $result->fetch()){

            $Naam = $row['Naam']; 
            $Volgers = $row['Volgers']; 
            $Email = $row['Email']; 
            $Datum = $row['Datum']; 
            $StatusOrder = $row['StatusOrder']; 

          }
  
          // Free result set
          unset($result);
      } else{
          echo 'No records matching your query were found.';
      }
  } catch(PDOException $e){
      die('ERROR: Could not able to execute $sql. ' . $e->getMessage());
  }
  
   ?>

   
<link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../style11.css">
    <link rel="stylesheet" href="../loginregister2.css">
    <script src="../js/loginregister.js"></script>

<form method="post" action="">
                  <div class="box">
                    <h1>Order Aanpassen</h1>
                    <h6> Naam: 
                       <input type="text" name="Naam1" class="InputField" value='<?php echo $Naam  ?>' onFocus="field_focus(this, '<?php echo $Naam  ?>');" onblur="field_blur(this, '<?php echo $Naam  ?>');">
                       </h6>
                       <h6>    Email: <br>   
                         <input type="text" name="Email1" class="InputField" value='<?php echo $Email   ?>' onFocus="field_focus(this, '<?php echo $Email  ?>');" onblur="field_blur(this, '<?php echo $Email  ?>');">
                         </h6>
                       <h6> Volgers gekocht: 
                        <input type="text" name="Volgers1" class="InputField" value='<?php echo $Volgers   ?>' onFocus="field_focus(this, '<?php echo $Volgers   ?>');" onblur="field_blur(this, '<?php echo $Volgers   ?>');">
                        </h6>
                         <h6> Datum: 
                          <input type="text" name="Datum1" class="InputField" value='<?php echo $Datum  ?>' onFocus="field_focus(this, '<?php echo $Datum  ?>');" onblur="field_blur(this, '<?php echo $Datum  ?>');">
                          </h6>
                          <h6> Status Order: 
                          <input type="text" name="StatusOrder1" class="InputField" value='<?php echo $StatusOrder  ?>' onFocus="field_focus(this, '<?php echo $StatusOrder  ?>');" onblur="field_blur(this, '<?php echo $StatusOrder  ?>');">
                          </h6>
                          <button type="submit" class="btn btn-center" name="editKlant" value="editKlant">Pas aan</button>
                          <a href="Bestellingen.php"><div id="btn2">Terug</div></a>
                       </div>
                     </form>
<br>


 
 <?php

if(isset($_POST['editKlant'])){
    $Naam1 = $_POST['Naam1'];
    $Email1 = $_POST['Email1'];
    $Volgers1 = $_POST['Volgers1'];
    $Datum1 = $_POST['Datum1'];
    $StatusOrder1 = $_POST['StatusOrder1'];

$sql = "UPDATE orderklant SET
Naam = '$Naam1',
Email = '$Email1',
Volgers = '$Volgers1',
Datum = '$Datum1',
StatusOrder = '$StatusOrder1'
 WHERE id=$id2";

if ($conn->query($sql) === TRUE) {
  echo "Aanpassen gelukt gelukt!";
  header('refresh:2;url=index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>

