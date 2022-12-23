<?php
include('config.php');
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $password = $_POST['password'];
 
    $sql = mysqli_query($mysqli, "SELECT * FROM admini WHERE id='$id' AND password='$password'");
    $count = mysqli_num_rows($sql);
    if (mysqli_num_rows($sql) == 0) {
    } else {
        $row = mysqli_fetch_assoc($sql);
        $_SESSION["id"] = $row["id"];
        $_SESSION["nama"] = $row["nama"];
            header("Location: data.php");
    }
    }
?>
<html>
  <head>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <div>
      <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Masukkan nama dan password anda.</h2>
      </p>
    </div>
    <form class="mt-8 space-y-6" action="#" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="-space-y-px rounded-md shadow-sm">
        <div>
          <label for="nama" class="sr-only">Nama Pelajar</label>
          <input id="nama" name="nama" type="text" autocomplete="nama" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Nama Pelajar">
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
        </div>
      </div>

      <div class="flex items-center justify-between">

      </div>

      <div>
        <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
          <a href="data.php">Sign in</a>
        
        </span></button>
      </div>
    </form>
  </div>
</div>  
</html>
