<?php 
    include 'PHP\DonateMoneyC.php';
    $money = new DatabaseDonateMoney();
    $id = $_REQUEST['id'];
    $delete = $money->delete($id);
 
    if ($delete) {
        echo "<script>alert('Donation has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'moneyDashboard.php';</script>";
    }
 ?>