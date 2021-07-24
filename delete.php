<?php //DELETE 
       require_once "db/conn.php";  

    $id = $_GET['id'];

        $s_sql ="SELECT * FROM registration WHERE id=$id";
        $data = mysqli_query($con,$s_sql);

        $record = mysqli_num_rows($data);

        if($record == 0){
            echo "<script> alert('Invalid User..!');</script>";
        }else{
            $sql1 = "DELETE FROM registration WHERE id='$id' ";
            mysqli_query($con,$sql1);
            echo "<script> alert('Record Delete Successfully..!');</script>";         
        }    
       
?>
 <div>
    <a href="show.php"><h4>BACK TO RECORDS PAGE</h4></a>
</div>