<?php

function layout($include)
{

  // Include Essentials
  include_once __DIR__ . "/includes/header.php";

  // Include Component
  include_once __DIR__ . "/components/nav.php";

?>


  <div class="w-full flex h-full justify-between flex-col" id="root">
    <div class="container mx-auto md:my-10 mt-3 p-5">

      <?php

      require_once __DIR__ . $include;

      ?>

    </div>
    <div>
      <?php

      // Include Component
      include_once __DIR__ . "/components/sponsors.php";
      include_once __DIR__ . "/components/download.php";

      include_once __DIR__ . "/components/totop.php";

      // Include Essentials
      include_once __DIR__ . "/includes/footer.php";

      ?>
    </div>
  </div>

<?php

}
