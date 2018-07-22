<?php

require 'navbar.php';
require "connection.php"; 



$id = $_GET['id'];


$sql = "SELECT * FROM `company` WHERE id='$id'";


$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$id = $row['id'];
$name = $row['name'];
$address = $row['address'];
$email = $row['email'];
$phone_no = $row['phone_no'];
$country = $row['country'];



?>


<div class="container">
  <h2>Edit Company</h2>
  
  <form action="editCompanyBackend.php" method="POST">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
    </div>
    <div class="form-group">
      <label>Address:</label>
      <input type="text" class="form-control" name="address" value="<?php echo $address ?>">
    </div>
      <div class="form-group">
      <label>Email:</label>
      <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
    </div>
    <div class="form-group">
      <label>Phone No:</label>
      <input type="text" class="form-control" name="phone_no" value="<?php echo $phone_no ?>">
    </div>
      <div class="form-group">
      <label>Country:</label>
      <input type="text" class="form-control" name="country" value="<?php echo $country ?>">
    </div>

     <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
    <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>
