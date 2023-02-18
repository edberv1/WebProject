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
    <h1>Users</h1>
        <?php
            include 'registerC.php';
            $registeri = new DatabaseRegister();
            $insert = $registeri->insert2();

            ?>
       <form action="" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
      <label for="name">Surname</label>
      <input type="text" id="name" name="surname" required>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <label for="user_type">Role:</label>
      <select name="user_type" id="selektimi" required>
                    <option value="user" name="user">user</option>
                    <option value="admin" name ="admin">admin</option>
        </select><br><br>
    

      <button type="submit" name="submit">Add User</button>
    </form>
    
  </div>
</body>
</html>
