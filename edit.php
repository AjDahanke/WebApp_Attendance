<?php   //UPDATE & EDIT
    $title ="Attendance - Edit";
   require_once 'include/header.php'; 
   require_once 'db/conn.php';
   $id = $_GET['id'];
   $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $dob   = $_GET['dob'];
    $spe   = $_GET['speciality'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];

if(isset($_POST['update'])){
   
    $sql = "SELECT * FROM registration WHERE id='$id' ";
    $result = mysqli_query($con,$sql);
    $record = mysqli_num_rows($result);
    if($record == 0){
        echo "<script> alert('Invalid User..!');</script>";
    }else{
        $update_sql = "UPDATE registration WHERE SET fname='$fname', lname='$lname',dob='$dob',speciality='$spe,email='$email',phone='$phone' ";
        mysqli_query($con,$update_sql);
        echo"<script> alert('Records Inserted successfully..!');</script>";
    }
}
?> 
<div>
    <a href="show.php"><h4>BACK</h4></a>
</div>

<form method="post" action="">
    <div class="form-group">
        <label for="firstname" >First Name</label>
        <input type="text" class="form-control" name="firstname" value="<?php echo $fname;?>">
        </div>
    <div class="form-group">
        <label for="lastname" >Last Name</label>
        <input type="text" class="form-control" name="lastname" value="<?php echo $lname;?>" >
        </div>
    <div class="form-group">
        <label for="dob" >Date of Birth</label>
        <input type="text" class="form-control" name="dob" value="<?php echo $dob;?>" >
        </div>
    <div class="form-group">
        <label for="speticality" >Area of Expertise</label>
            <select class="form-control" name="speciality" value="<?php echo $spe;?>"  >
                <option>Database Admin</option>
                <option>Software Developer</option>
                <option>Web Administrator</option>
                <option>Other</option>
            </select>
        </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="exampleInputEmail1" value="<?php echo $email;?>" >
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="phone" value="<?php echo $phone;?>" >
        <div id="phoneHelp" class="form-text">We'll never share your Number with anyone else.</div>
        </div>
    
    <div >
        <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
        </div>
    <br>

    
<?php
    require_once "include/footer.php";
?>



