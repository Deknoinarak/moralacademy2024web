<?php

require 'includes/header.php';
require 'admin/src/config/db.php';

?>

<div class="block static" id="wrapper">
  <div class="container mx-auto md:mt-10 mt-3 p-5 text-white">
    <div class="flex flex-col items-center justify-center">
      <header class="md:mb-10 mb-3">
        <div class="flex items-baseline flex-col lg:flex-row">
          <h1 class="text-2xl md:text-4xl font-bold text-sky-300 pr-3">
            โครงการพัฒนาชุมชน
          </h1>
          <h2 class="text-2xl md:text-5xl font-bold text-white">
            ผู้นำคุณธรรมวิถียั่งยืน รุ่นที่ 1
          </h2>
        </div>
        <h3 class="pt-2 text-sm md:text-base">
          ภายใต้แนวคิด : Catalyzing Change : Moral leadership for
          Sustainable Impact
        </h3>
      </header>

      <?php

      $sql = "SELECT video_id FROM videos ORDER BY level";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

      ?>
          <iframe src="https://www.youtube.com/embed/<?= $row["video_id"] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="my-5 w-full aspect-video max-w-screen-lg"></iframe>
      <?php

        }
      }

      ?>

      <section class="flex justify-center items-center my-5 mb-8 flex-col gap-3 md:gap-0">
        <div class="my-7">
          <h1 class="text-xs md:text-xl font-bold text-sky-300 pr-3 uppercase">
            Keynote Speakers, executives, and lecturers
          </h1>
          <h2 class="text-2xl md:text-5xl font-bold text-white">
            องค์ปาฐกถา ผู้บริหาร และวิทยากร
          </h2>
        </div>
        <div id="lecturers" class="flex flex-col md:flex-row w-full gap-5 justify-center flex-wrap"></div>
      </section>

      <div class="my-5 grid w-full gap-7 max-w-5xl">
        <div>
          <h3 class="rounded-2xl font-bold text-2xl mr-3 block w-fit">
            วันที่
          </h3>
          <p class="block text-xl md:text-3xl font-bold">
            24 เมษายน - 19 มิถุนายน พ.ศ. 2567
          </p>
        </div>
        <div>
          <h3 class="rounded-2xl font-bold text-2xl mr-3 block mb-2 w-fit">
            สถานที่
          </h3>
          <p class="block md:text-xl indent-5">
            - โรงแรมเดอะสุโกศล กรุงเทพฯ
          </p>
          <p class="block md:text-xl indent-5">
            - คณะแพทยศาสตร์จุฬาลงกรณ์มหาวิทยาลัย
          </p>
          <p class="block md:text-xl indent-5">
            - บริษัท ดีทีจีโอ คอร์ปอเรชั่น จำกัด (DTGO Campus)
          </p>
        </div>
        <div>
          <h3 class="rounded-2xl font-bold text-2xl mr-3 block mb-2 w-fit">
            เป้าหมาย
          </h3>
          <p class="block md:text-xl indent-5">
            -
            <b class="text-sky-200">สร้างชุมชน</b>
            ผู้บริหารหัวใจคุณธรรมจำนวนกว่า
            <b class="text-sky-200">30 คน จาก 5 เครือข่ายทางสังคม</b>
            ต่อยอดสู่ Moral Team Thailand
            เพื่อร่วมออกแบบสังคมคุณธรรมในบริบทใหม่
          </p>
          <p class="block md:text-xl indent-5">
            - <b class="text-sky-200">สร้างสังคม</b> ของการแลกเปลี่ยน
            เรียนรู้ และแบ่งปัน<b class="text-sky-200">ทรัพยากรการทำงานข้ามเครือข่าย</b>
          </p>
          <p class="block md:text-xl indent-5">
            -
            <b class="text-sky-200">ออกแบบโครงการพัฒนาเศรษฐกิจ สังคม สิ่งแวดล้อม และวัฒนธรรม
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