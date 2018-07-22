<?php

require 'navbar.php';
require "connection.php"; 

$user_id = $_SESSION['user_id'] ;


$sql = "SELECT * FROM `company` WHERE `user_id` = $user_id";
$result = mysqli_query($conn,$sql); 


 ?>




<div class="container">
  <h2>View & Edit Company</h2>
   
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
         <th>Email</th>
        <th>Phone No</th>
         <th>Country</th>
        <th></th>

      
      </tr>
    </thead>
    <tbody>



        <?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){   ?>
        <tr>
          <td><a href="editCompany.php?id=<?php echo $row['id'] ?>"><?php echo $row['id']?></a></td>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['address']?></td>
           <td><?php echo $row['email']?></td>
          <td><?php echo $row['phone_no']?></td>
          <td><?php echo $row['country']?></td>
          <td><a href="deleteCompany.php?id=<?php echo $row['id'] ?>" >Delete</a></td>

    
      
        </tr>
          <?php }?>
  
    </tbody>
  </table>


<a href="companyAdd.php"><button type="button" class="btn btn-default btn-md">
      <span class="glyphicon glyphicon-upload"></span> Add New Company
</button></a>



</div>