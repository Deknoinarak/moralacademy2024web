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
      ภายใต้แนวคิด : Catalyzing Change : Moral leadership for Sustainable
      Impact
    </h3>
  </header>

  <lite-youtube videoid="ZiwWXe47KxY" playlabel="Play Video" title="โครงการพัฒนาชุมชนผู้นำคุณธรรมวิถียั่งยืน โดย รศ.นพ.สุริยเดว ทรีปาตี │ The Exclusive" class="yt-lite w-full h-full aspect-video max-w-screen-lg my-5 bg-cover bg-center"></lite-youtube>
  <lite-youtube videoid="M7eO6YP0pd0" playlabel="Play Video" title="โครงการพัฒนาชุมชนผู้นำคุณธรรมวิถียั่งยืน โดย ดร.ศิริลักษณ์ เมฆสังข์ │ The Exclusive" class="yt-lite w-full h-full aspect-video max-w-screen-lg my-5 bg-cover bg-center"></lite-youtube>

  <section class="flex justify-center items-center my-5 mb-8 flex-col gap-3 md:gap-0">
    <div class="my-7">
      <h1 class="text-xs md:text-xl font-bold text-sky-300 pr-3 uppercase">
        Keynote Speakers, executives, and lecturers
      </h1>
      <h2 class="text-2xl md:text-5xl font-bold text-white">
        องค์ปาฐกถา ผู้บริหาร และวิทยากร
      </h2>
    </div>
    <div id="lecturers" class="flex flex-col md:flex-row w-full gap-5 justify-center flex-wrap">
      <?php

      $str = file_get_contents('assets/data/lecturers.json');
      $json = json_decode($str, true);

      foreach ($json as $speaker) {
      ?>
        <a <?php if (!isset($speaker["history"])) {
            ?> style="pointer-events: none;" <?php
                                            } ?> href="/mlc/?id=<?= $speaker["id"] ?>" class="flex md:block gap-4 items-center md:justify-between xl:w-1/6 md:w-1/4 lg:w-1/5 group">
          <img src="/mlc/assets/img/lecturers/<?= $speaker["id"] ?>.png" alt="" class="bg-white rounded-full group-hover:scale-[1.02] transition-all w-32 md:w-full" />
          <div class="text-left md:text-center mt-2">
            <div class="text-sky-200 group-hover:text-white font-bold mb-0 pb-0 break-words text-lg whitespace-nowrap max-[375px]:whitespace-nowrap md:whitespace-nowrap hyphens-manual leading-snug">
              <?= $speaker["name"] ?>
            </div>
            <div class="text-sky-200 group-hover:text-white block text-sm md:whitespace-nowrap hyphens-manual leading-tight">
              <?= $speaker["role"] ?>
            </div>
            <?php if (isset($speaker["subtitle"])) { ?>
              <div class="text-sky-200 text-xs font-bold md:whitespace-nowrap hyphens-manual">
                <?= $speaker["subtitle"] ?>
              </div>
            <?php } ?>
          </div>
        </a>
      <?php

      }
      unset($speaker['lecturers']);

      ?>
    </div>
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
        - <b class="text-sky-200">สร้างชุมชน</b>
        ผู้บริหารหัวใจคุณธรรมจำนวนกว่า
        <b class="text-sky-200">30 คน จาก 5 เครือข่ายทางสังคม</b>
        ต่อยอดสู่ Moral Team Thailand เพื่อร่วมออกแบบสังคมคุณธรรมในบริบทใหม่
      </p>
      <p class="block md:text-xl indent-5">
        - <b class="text-sky-200">สร้างสังคม</b> ของการแลกเปลี่ยน
        เรียนรู้ และแบ่งปัน
        <b class="text-sky-200">ทรัพยากรการทำงานข้ามเครือข่าย</b>
      </p>
      <p class="block md:text-xl indent-5">
        -
        <b class="text-sky-200">
          ออกแบบโครงการพัฒนาเศรษฐกิจ สังคม สิ่งแวดล้อม และวัฒนธรรม
          สู่ความยั่งยืนด้วยแนวทางและปณิธาน
        </b>
        &quot;ปรัชญาของเศรษฐกิจพอเพียง&quot;
      </p>
    </div>
  </div>
</div>