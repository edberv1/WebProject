<?php 
    include 'registerC.php';
    $registeri = new DatabaseRegister();
    $id = $_REQUEST['id'];
    $delete = $registeri->delete($id);
 
    if ($delete) {
        echo "<script>alert('The user has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'userDashboard.php';</script>";
    }
 ?>