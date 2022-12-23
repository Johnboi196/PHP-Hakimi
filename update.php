<?php
include('config.php'); 
if(isset($_POST['no_kp'])) {    
    $id = $_POST['id'];
    $namapekerja = $_POST['nama'];
    $nokp = $_POST['ndp'];
    $jantina = $_POST['nokp'];
    $sql = "UPDATE admini SET id='$id', nama='$namapekerja',nokp='$nokp', 
	ndp = '$jantina', nokp = '$nohp' WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='data.php'</script>";
}
$id = $_GET['id'];
$sql = "SELECT * FROM admini WHERE id = '$id' ";
$result = mysqli_query($mysqli, $sql);
while ($pekerja = mysqli_fetch_array($result)) {
    $id = $pekerja['id'];
    $namapekerja = $pekerja['nama'];
    $nokp = $pekerja['ndp'];
    $jantina = $pekerja['nokp'];
}
?>

<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.tailwindcss.com"></script>
   <form>
  <div class="mb-6">
    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Aduan</label><br>
    <input type="text" id="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
  </div>
  <div class="mb-6">
    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Aduan</label><br>
    <input type="text" id="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
  </div>
  <div class="mb-6">
    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarikh Aduan</label><br>
    <input type="text" id="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
  </div>
  <div class="mb-6">
    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ringkasan Aduan</label><br>
    <input type="text" id="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kemas Kini</button>
</form> 
</html>