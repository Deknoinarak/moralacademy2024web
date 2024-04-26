<?php

require 'includes/header.php';
require 'admin/src/config/db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM lecturers WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {

?>

    <div id="wrapper">
      <div class="container mx-auto md:mt-10 mt-3 p-5 text-white max-w-5xl">
        <div class="flex flex-col items-start justify-center">
          <header class="md:mb-10 mb-3">
            <h1 class="text-2xl md:text-4xl font-bold text-sky-300 pr-3">
              ประวัติ
            </h1>
            <h2 class="text-2xl md:text-5xl font-bold text-white">
              <?= $row["name"] ?>
            </h2>
          </header>

          <img src="<?= $row["history"] ?>" alt class="w-full" />
        </div>
      </div>
    </div>

<?php
  }
}

mysqli_close($conn);

require 'includes/footer.php'

?>