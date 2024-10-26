<?php
$id=$_GET['id'];
$q="DELETE FROM `class` WHERE id=$id";
include('init.php');
$result=mysqli_query($conn,$q);
header('location:manage_classes.php');
    ?>

