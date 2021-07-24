<?php
    $title = "Attendance - SHOW";
    require_once "include/header.php";
?>

<?php //SHOW RECORDS
    require_once "db/conn.php";

    $query = mysqli_query($con,"SELECT * FROM registration");
    echo"<table class='table table-striped' border=3>";
    echo"<tr><th>ID</th> <th>First NAME</th> <th>Last NAME</th>  <th>DOB</th> <th>SPECIALITY</th> <th>Email</th> <th>Phone No</th> <th>Password</th> <th>EDIT</th> <th>Delete</th></tr>";
        while($rec = mysqli_fetch_row($query))
        {
        echo"<tr><td>$rec[0]</td> <td>$rec[1]</td> <td>$rec[2]</td> <td>$rec[3]</td>
            <td>$rec[4]</td> <td>$rec[5]</td> <td>$rec[6]</td> <td>$rec[7]</td> 

            <td><a class=btn-warning href='edit.php?id=$rec[0] &fname=$rec[1] &lname=$rec[2]    
            &dob=$rec[3] &speciality=$rec[4] &email=$rec[5] &phone=$rec[6] '>Edit/Update</a></td> 

            <td><a class=btn-danger href='delete.php?id=$rec[0]'>Delete</a></td>  </tr>";
          
        }
    echo "</table>"; 
?>
<div>
    <a href="index.php"><h4>Home Page</h4></a>
</div>


<?php
    require_once "include/footer.php";
?>