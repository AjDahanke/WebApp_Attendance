
<?php
    $title ="Index";
   require_once 'include/header.php'; 
   require_once 'db/conn.php';
?> 
    <!--First name
        Last Name
        Bate of Birth
        Speciality(Database Admin, S/W Developer,Web admiistrator,Other)
        Email
        Password
        Contact Number 
    -->  
    <form method="post" action="success.php">
    <div class="form-group">
        <label for="firstname" >First Name</label>
        <input type="text" class="form-control" name="firstname">
        </div>
    <div class="form-group">
        <label for="lastname" >Last Name</label>
        <input type="text" class="form-control" name="lastname">
        </div>
    <div class="form-group">
        <label for="dob" >Date of Birth</label>
        <input type="date" class="form-control" name="dob">
        </div>
    <div class="form-group">
        <label for="speticality" >Area of Expertise</label>
            <select class="form-control" name="speciality">
                <option>Database Admin</option>
                <option>Software Developer</option>
                <option>Web Administrator</option>
                <option>Other</option>
            </select>
        </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="exampleInputEmail1">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="phone">
        <div id="phoneHelp" class="form-text">We'll never share your Number with anyone else.</div>
        </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="exampleInputPassword1">
        </div>
    <div >
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
        <br>
    
    </form>

    <?php require_once 'include/footer.php'; ?>
