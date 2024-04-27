<?php

require 'includes/header.php';
require 'admin/src/config/db.php';

?>

<div class="tw-block tw-static" id="wrapper">
  <div class="tw-container tw-mx-auto md:tw-mt-10 tw-mt-3 tw-p-5 tw-text-white">
    <div class="tw-flex tw-flex-col tw-items-center tw-justify-center">
      <header class="md:tw-mb-10 tw-mb-3">
        <div class="tw-flex tw-items-baseline tw-flex-col lg:tw-flex-row">
          <h1 class="tw-text-2xl md:tw-text-4xl tw-font-bold tw-text-sky-300 tw-pr-3">
            โครงการพัฒนาชุมชน
          </h1>
          <h2 class="tw-text-2xl md:tw-text-5xl tw-font-bold tw-text-white">
            ผู้นำคุณธรรมวิถียั่งยืน รุ่นที่ 1
          </h2>
        </div>
        <h3 class="tw-pt-2 tw-text-sm md:tw-text-base">
          ภายใต้แนวคิด : Catalyzing Change : Moral leadership for
          Sustainable Impact
        </h3>
      </header>

      <?php

      $sql = "SELECT video_id FROM videos ORDER BY level";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

      ?>
          <iframe src="https://www.youtube.com/embed/<?= $row["video_id"] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="tw-my-5 tw-w-full tw-aspect-video tw-max-w-screen-lg"></iframe>
      <?php

        }
      }

      ?>

      <section class="tw-flex tw-justify-center tw-items-center tw-my-5 tw-mb-8 tw-flex-col tw-gap-3 md:tw-gap-0">
        <div class="tw-my-7">
          <h1 class="tw-text-xs md:tw-text-xl tw-font-bold tw-text-sky-300 tw-pr-3 tw-uppercase">
            Keynote Speakers, executives, and lecturers
          </h1>
          <h2 class="tw-text-2xl md:tw-text-5xl tw-font-bold tw-text-white">
            องค์ปาฐกถา ผู้บริหาร และวิทยากร
          </h2>
        </div>
        <div id="lecturers" class="tw-flex tw-flex-col md:tw-flex-row tw-w-full tw-gap-5 tw-justify-center tw-flex-wrap">
          <?php

          $sql = "SELECT * FROM lecturers ORDER BY display_order";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

          ?>
              <a <?php

                  if ($row["history"] !== "") {
                    echo 'href="history.php?id=' . $row["id"] . '"';
                  }

                  ?> class="tw-flex md:tw-block tw-gap-4 tw-items-center md:tw-justify-between xl:w-1/tw-6 md:w-1/tw-4 lg:w-1/tw-5 tw-group">
                <img src="<?= $row["img"] ?>" alt="" class="tw-bg-white tw-rounded-full group-hover:scale-[1.02] tw-transition-all tw-w-32 md:tw-w-full">
                <div class="tw-text-left md:tw-text-center tw-mt-2">
                  <p class="tw-text-sky-200 group-hover:tw-text-white tw-text-lg tw-font-bold tw-mb-0 tw-pb-0 tw-break-words">
                    <?= $row["name"] ?>
                  </p>
                  <span class="tw-text-sky-200 group-hover:tw-text-white tw-block">
                    <?= $row["role"] ?>
                  </span>
                  <?php

                  if ($row["subtitle"] !== '') {
                  ?>
                    <span class="tw-text-sky-200 tw-text-xs tw-font-bold"><?= $row["subtitle"] ?></span>
                  <?php
                  }

                  ?>
                </div>
              </a>
          <?php

            }
          }

          ?>
        </div>
      </section>

      <div class="tw-my-5 tw-grid tw-w-full tw-gap-7 tw-max-w-5xl">
        <div>
          <h3 class="tw-rounded-2xl tw-font-bold tw-text-2xl tw-mr-3 tw-block tw-w-fit">
            วันที่
          </h3>
          <p class="tw-block tw-text-xl md:tw-text-3xl tw-font-bold">
            24 เมษายน - 19 มิถุนายน พ.ศ. 2567
          </p>
        </div>
        <div>
          <h3 class="tw-rounded-2xl tw-font-bold tw-text-2xl tw-mr-3 tw-block tw-mb-2 tw-w-fit">
            สถานที่
          </h3>
          <p class="tw-block md:tw-text-xl tw-indent-5">
            - โรงแรมเดอะสุโกศล กรุงเทพฯ
          </p>
          <p class="tw-block md:tw-text-xl tw-indent-5">
            - คณะแพทยศาสตร์จุฬาลงกรณ์มหาวิทยาลัย
          </p>
          <p class="tw-block md:tw-text-xl tw-indent-5">
            - บริษัท ดีทีจีโอ คอร์ปอเรชั่น จำกัด (DTGO Campus)
          </p>
        </div>
        <div>
          <h3 class="tw-rounded-2xl tw-font-bold tw-text-2xl tw-mr-3 tw-block tw-mb-2 tw-w-fit">
            เป้าหมาย
          </h3>
          <p class="tw-block md:tw-text-xl tw-indent-5">
            -
            <b class="tw-text-sky-200">สร้างชุมชน</b>
            ผู้บริหารหัวใจคุณธรรมจำนวนกว่า
            <b class="tw-text-sky-200">30 คน จาก 5 เครือข่ายทางสังคม</b>
            ต่อยอดสู่ Moral Team Thailand
            เพื่อร่วมออกแบบสังคมคุณธรรมในบริบทใหม่
          </p>
          <p class="tw-block md:tw-text-xl tw-indent-5">
            - <b class="tw-text-sky-200">สร้างสังคม</b> ของการแลกเปลี่ยน
            เรียนรู้ และแบ่งปัน<b class="tw-text-sky-200">ทรัพยากรการทำงานข้ามเครือข่าย</b>
          </p>
          <p class="tw-block md:tw-text-xl tw-indent-5">
            -
            <b class="tw-text-sky-200">ออกแบบโครงการพัฒนาเศรษฐกิจ สังคม สิ่งแวดล้อม และวัฒนธรรม
              สู่ความยั่งยืนด้วยแนวทางและปณิธาน</b>
            "ปรัชญาของเศรษฐกิจพอเพียง"
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

mysqli_close($conn);

require 'includes/footer.php'

?>