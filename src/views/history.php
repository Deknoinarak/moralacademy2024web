<?php

require_once __DIR__ . "/../functions.php";

$historyInfo = getLecturer($_GET["id"]);

if (!$historyInfo || !isset($historyInfo["history"])) {
  echo file_get_contents(__DIR__ . "/../404.html");
  http_response_code(404);
  return;
}

?>

<div class="flex flex-col items-start justify-center max-w-5xl mx-auto">
  <a href="/mlc/" class="mb-5 underline text-sky-300 hover:text-sky-200 transition-all">
    < กลับไปหน้าแรก </a>
      <header class="md:mb-10 mb-3">
        <h1 class="text-2xl md:text-4xl font-bold text-sky-300 pr-3">
          ประวัติ
        </h1>
        <h2 class="text-2xl md:text-5xl font-bold text-white">
          <?= $historyInfo["name"] ?>
        </h2>
      </header>

      <img src="/mlc/assets/history/<?= $historyInfo["id"] ?>.jpg" loading="eager" fetchPriority="high" alt="" class="w-full h-auto" />
</div>