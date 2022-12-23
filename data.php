<?php
include ('config.php');
?>

<html>
    <head>
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        </table>
        <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              Kategori Aduan
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              Tempat Aduan
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              Tarikh Aduan
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              Ringkasan Aduan
              </th>
            </tr>
       
    <?php
            $sql = "SELECT * FROM admini ORDER BY id ASC";
            $data = mysqli_query($mysqli, $sql);
            $bil = 1;
            while ($pekerja = mysqli_fetch_array($data)){
                ?>
                <tbody class="border-b">
                <tr>
                    <td class="bilnum"><?php echo $bil; ?></td>
              <td scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              <?php echo $pekerja['nama']; ?>
              </td>
              <td scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              <?php echo $pekerja['ndp']; ?>
              </td>
              <td scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              <?php echo $pekerja['nokp']; ?>
                    <td>
                        <a href="update.php?id=<?php echo $pekerja['id'];?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Kemaskini</a> 
                        <a href="delete.php?no_kp=<?php echo $pekerja['id'];?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Padam </a> 
                            </td> 
                </tr> 
                </tbody>
            <?php $bil = $bil + 1; 
            } 
            ?> 
             </table>
    </body>
</html>