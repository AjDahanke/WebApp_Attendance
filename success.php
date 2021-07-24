
<?php
    $title ="success";
   require_once 'include/header.php'; 
   require_once 'db/conn.php';
?>
<!-- Using GET Method
<div class="card" style="width: 18rem;">
   <div class="card-copy">
      <h5 class="card-title"><?php //echo $_GET['firstname'].' ' .$_GET['lastname'];  ?></h5>
      <h6 class="card-subtitle bm-2 text-muted"><?php //echo $_GET["speciality"]; ?></h6> 
      <p class="card-text">Date Of Birth:<?php //echo $_GET["dob"];  ?></p>
      <p class="card-text">Email:<?php //echo $_GET["exampleInputEmail1"];  ?></p>
      <p class="card-text">Password:<?php //echo $_GET["exampleInputPassword1"];  ?></p>
      <p class="card-text">Phone No:<?php //echo $_GET["phone"]; ?></p>
   </div>
</div>
-->
   <?php 
   /*
      echo $_GET["firstname"];
      echo $_GET["lastname"];
      echo $_GET["dob"];
      echo $_GET["speciality"];
      echo $_GET["exampleInputEmail1"];
      echo $_GET["exampleInputPassword1"];
      echo $_GET["phone"];
   */
   ?>
<?php //INSERT Operation
   if(isset($_POST['submit']))
   {
      $fname = $_POST["firstname"];
      $lname =$_POST["lastname"];
      $dob   =$_POST["dob"];
      $spe   =$_POST["speciality"];
      $email =$_POST["exampleInputEmail1"];
      $phone =$_POST["phone"];
      $pass  =$_POST["exampleInputPassword1"];

   if(!empty($fname) && !empty($lname) && !empty($dob) && !empty($spe) && !empty($email) && !empty($phone) && !empty($pass))
    {
      $ins =" INSERT INTO registration(firstname,lastname,dob,speciality,exampleInputEmail1,phone,exampleInputPassword1)VALUES('$fname','$lname','$dob','$spe','$email','$phone','$pass')";
      
      $query = mysqli_query($con,$ins);
      if($query){
         echo"<h1 class='text-center text-success'>You have been Registered...!</h1>";
      }
    }else{
      
       echo"<script> alert('All Fields are Required..!');</script>";
       
    }
   }
?>

<div class="card" style="width: 18rem;">
   <div class="card-copy">
      <h5 class="card-title"><?php echo $_POST['firstname'].' ' .$_POST['lastname'];  ?></h5>
      <h6 class="card-subtitle bm-2 text-muted"><?php echo $_POST["speciality"]; ?></h6> 
      <p class="card-text">Date Of Birth:<?php echo $_POST["dob"];  ?></p>
      <p class="card-text">Email:<?php echo $_POST["exampleInputEmail1"];  ?></p>
      <p class="card-text">Password:<?php echo $_POST["exampleInputPassword1"];  ?></p>
      <p class="card-text">Phone No:<?php echo $_POST["phone"]; ?></p>
   </div>
</div>
<div>
   <a href="index.php"><h4>BACK TO MAIN PAGE</h4></a>
</div>

<div >
      <a href="show.php" class="btn-primary">SHOW RECORDS</a>
   </div>



<br/>
<br/>
<br/>
<br/>
<br/>
<?php require_once 'include/footer.php'; ?>