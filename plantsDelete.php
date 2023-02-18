<?php 
    include 'PHP\DonatePlantsC.php';
    $plants = new DatabaseDonatePlants();
    $id = $_REQUEST['id'];
    $delete = $plants->delete($id);
 
    if ($delete) {
        echo "<script>alert('Donation has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'plantsDashboard.php';</script>";
    }
 ?>