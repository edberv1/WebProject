<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="userDashboard.css">
</head>
<body>

  <a class="navbar-brand" href="dashboard.php">Main Dashboard <</a>

  <div class="container">
    <h1>Users that donated plants!</h1>
    
     <a href="plantsAdd.php">  <button type="submit" name="submit" id="userAdd">Add Donation</button><br> <br> </a> 
    
    <table>
      <thead>
        <tr>
           <th>ID</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Plants</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
 
        include 'DonatePlantsC.php';
        $plant = new DatabaseDonatePlants();
        $rows = $plant->fetch();
       
        if(!empty($rows)){
        foreach($rows as $row){ 
       ?>
        <tr>
                
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phoneNumber']; ?></td>
                <td><?php echo $row['plants']; ?></td>
                <td>
                  <a href="plantDelete.php?id=<?php echo $row['id']; ?>" class="btn btn1">Delete</a>
                  
                </td>
              </tr>
              <?php
                }
                
              }
              
              else{
                echo "There is no data!";
              }
            ?>
      </tbody>
    </table>
  </div>
</body>
</html>
