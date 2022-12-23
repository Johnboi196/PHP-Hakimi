<?php
 include('config.php');
 $id = $_GET['id'];
 $sql = "DELETE FROM admini WHERE id= '$id'";
 $result = mysqli_query($mysqli, $sql);
 if ($result)
     echo "<script>alert('Berjaya padam rekod')</script>";
else 
   echo "<script>alert('Tidak berjaya padam rekod')</script>";
echo "<script>window.location='data.php'</script>";
?>