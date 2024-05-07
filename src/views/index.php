<article class="flex flex-col items-center justify-center">
  <header class="md:mb-10 mb-3 w-full md:w-fit">
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

  <div class="my-7 w-full">
    <h1 class="text-2xl md:text-4xl font-bold text-white md:text-center mb-2">
      องค์ปาฐกถา ผู้บริหาร และวิทยากร
    </h1>
    <span class="text-xs md:text-sm font-bold text-sky-300 uppercase md:text-center block">
      Keynote Speakers, executives, and lecturers
    </span>
  </div>
  <section class="flex justify-center items-center my-5 mb-8 flex-col gap-3 md:gap-0">
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
            <div class="text-sky-200 group-hover:text-white font-bold pb-0 break-words text-lg whitespace-nowrap max-[375px]:whitespace-nowrap md:whitespace-nowrap hyphens-manual leading-snug mb-1">
              <?= $speaker["name"] ?>
            </div>
            <div class="text-sky-200 group-hover:text-white block text-sm md:whitespace-nowrap hyphens-manual leading-tight">
              <?= $speaker["role"] ?>
            </div>
            <?php if (isset($speaker["subtitle"])) { ?>
              <div class="text-sky-200 text-xs font-bold md:whitespace-nowrap hyphens-manual mt-0.5">
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

  <section class="my-5 grid w-full gap-7 max-w-5xl">
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
  </section>

  <section class="w-full h-full">
    <div id="animation-carousel" class="relative max-w-screen-lg w-full my-8 rounded-lg aspect-video mx-auto" data-carousel>
      <!-- Carousel wrapper -->
      <div class="relative overflow-hidden rounded-lg w-full h-full">
        <!-- Carousel indicators, if desired -->
        <div id="indicator-container" class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
          <template id="carousel-indicator">
            <button type="button" class="w-3 h-3 rounded-full border border-white" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0">
              <svg viewBox="0 0 100 100" class="text-white" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" fill="currentColor" stroke="white" stroke-width="3" />
              </svg>
            </button>
          </template>
        </div>
        <!-- Items -->
        <div class="opacity-0 transition duration-150 ease-in-out w-full" data-carousel-item="active">
          <div class="w-full">
            <lite-youtube videoid="ZiwWXe47KxY" playlabel="Play Video" title="โครงการพัฒนาชุมชนผู้นำคุณธรรมวิถียั่งยืน โดย รศ.นพ.สุริยเดว ทรีปาตี │ The Exclusive" class="yt-lite max-w-none"></lite-youtube>
          </div>
        </div>
        <div class="opacity-0 transition duration-150 ease-in-out w-full" data-carousel-item>
          <div class="w-full">
            <lite-youtube videoid="M7eO6YP0pd0" playlabel="Play Video" title="โครงการพัฒนาชุมชนผู้นำคุณธรรมวิถียั่งยืน โดย ดร.ศิริลักษณ์ เมฆสังข์ │ The Exclusive" class="yt-lite max-w-none"></lite-youtube>
          </div>
        </div>
      </div>
      <!-- Slider controls, if desired -->
      <button type="button" class="absolute top-1/2 transform -translate-y-1/2 left-0 z-30 flex items-center justify-center px-4 focus:outline-none group" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none transition-all ease-in-out">
          <svg aria-hidden="true" class="w-5 h-5 text-zinc-400 hover:text-zinc-800 sm:w-6 sm:h-6 dark:text-gray-800 transition-all ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-1/2 transform -translate-y-1/2 right-0 z-30 flex items-center justify-center px-4 focus:outline-none group" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none transition-all ease-in-out">
          <svg aria-hidden="true" class="w-5 h-5 text-zinc-400 hover:text-zinc-800 sm:w-6 sm:h-6 dark:text-gray-800 transition-all ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>
  </section>

  <section class="w-full max-w-screen-lg my-5 text-white">
    <header class="mb-5">
      <h3 class="rounded-2xl font-bold text-xl md:text-3xl mr-3 block w-fit">
        VISUAL NOTES
      </h3>
      <span class="block text-lg font-bold text-sky-300">
        สรุปการบรรยายของวิทยากร
      </span>
    </header>

    <div>
      <ul id="images" class="flex-col flex gap-3">
        <li>
          <button class="group">
            <img src="/mlc/assets/img/notes/1.jpg" alt="" class="w-full group-hover:scale-[1.015] transition-all"></button>
        </li>
        <li>
          <button class="group">
            <img src="/mlc/assets/img/notes/2.jpg" alt="" class="w-full group-hover:scale-[1.015] transition-all"></button>
        </li>
        <li>
          <button class="group">
            <img src="/mlc/assets/img/notes/3.jpg" alt="" class="w-full group-hover:scale-[1.015] transition-all"></button>
        </li>
        <li>
          <button class="group">
            <img src="/mlc/assets/img/notes/4.jpg" alt="" class="w-full group-hover:scale-[1.015] transition-all"></button>
        </li>
      </ul>
    </div>
  </section>
</article>

<script>
  /**
   * 
   * @param {HTMLElement} selector 
   * @returns a ✨ new carousel ✨
   */
  function Carousel(
    selector,
    setting = {
      autoRotationInterval: 0,
      onPrevCallback: null,
      onNextCallback: null,
      onIndicatorClickCallback: null
    }
  ) {
    this.selector = selector
    this.setting = setting

    // nope
    if (typeof window === 'undefined') {
      return;
    }
    // also nope
    if (!this.selector) {
      return;
    }
    // get some things we're going to need later
    this.carouselItems = this.selector.querySelectorAll('[data-carousel-item]');
    this.carouselItemsArray = Array.from(this.carouselItems);
    this.indicatorTemplate = this.selector.querySelector('#carousel-indicator');
    this.diplayItem = this.selector.querySelector('#items-number');
    // define interval timer so we can clear it later
    this.intervalInstance = null;

    /**
     * HELPER FUNCTIONS
     */
    /**

     * Gets the currently active slide
     * @returns {HTMLElement} item
     */
    this.getActiveItem = function() {
      return this.selector.querySelector('[data-carousel-item="active"]');
    }
    /**
     * 
     * gets the position of the item in the array
     * @param {HTMLElement} item 
     * @returns {HTMLElement} item
     */
    this.getPositionOfItem = function(item) {
      return this.carouselItemsArray.findIndex((carouselItem) => {
        return carouselItem === item;
      });
    }
    /**
     * 
     * Sets the carousel to the next slide
     * @param {HTMLElement} item
     * @returns {void}
     */
    this.setItemAsActive = function(item) {
      item.setAttribute('data-carousel-item', 'active');
      item.classList.remove('opacity-0');
      item.classList.add('opacity-100');
      item.classList.remove('pointer-events-none')

      // update the indicators if available
      const currentItemIndex = this.getPositionOfItem(item);
      const indicators = this.selector.querySelectorAll('[data-carousel-indicator]');
      indicators.length > 0 && Array.from(indicators).map((indicator, index) => {
        if (index === currentItemIndex) {
          indicator.setAttribute('aria-current', 'true');
          indicator.querySelector('svg').classList.add('text-slate-400');
          indicator.querySelector('svg').classList.remove('text-white');
        } else {
          indicator.querySelector('svg').classList.add('text-white');
          indicator.setAttribute('aria-current', 'false');
          indicator.querySelector('svg').classList.remove('text-slate-400');
          indicator.querySelector('svg').classList.add('text-white');
        }
      });
    }
    /**
     * 
     * @param {HTMLElement} item
     * @returns null
     */
    this.setItemAsInactive = function(item) {
      item.setAttribute('data-carousel-item', '');
      item.classList.add('opacity-0');
      item.classList.remove('opacity-100');
      item.classList.add('pointer-events-none');
    }

    /**
     * ACTIONS
     */
    /**
     * Set an interval to cycle through the carousel items
     * @returns {void}
     */
    this.cycle = function() {
      if (this.setting.autoRotationInterval <= 0) {
        return
      }
      this.intervalInstance = window.setInterval(() => {
        next();
      }, 5_000);
    }
    /**
     * Clears the cycling interval
     * @returns {void}
     */
    this.pause = function() {
      clearInterval(this.intervalInstance);
    }
    /**
     * Slides to the next position
     * 
     * @param {number} nextItem 
     * @returns {void}
     */
    this.slideTo = function(nextItem) {
      const activeItem = this.getActiveItem();
      this.setItemAsInactive(activeItem);
      this.setItemAsActive(nextItem);
      this.pause();
      this.cycle();
    }
    /**
     * Based on the currently active item it will go to the next position
     * @returns {void}
     */
    this.next = function() {
      this.setting.onNextCallback && this.setting.onNextCallback();
      let nextItem = null;
      const activeItem = this.getActiveItem();
      const activeItemPosition = this.getPositionOfItem(activeItem);
      if (activeItemPosition === this.carouselItems.length - 1) {
        // if it is the last item, set first item as next
        nextItem = this.carouselItems[0];
      } else {
        nextItem = this.carouselItems[activeItemPosition + 1];
      }
      this.slideTo(nextItem);
    }

    /**
     * Based on the currently active item it will go to the previous position
     * @returns {void}
     */
    this.prev = function() {
      this.setting.onPrevCallback && this.setting.onPrevCallback();
      let prevItem = null;
      const activeItem = this.getActiveItem();
      const activeItemPosition = this.getPositionOfItem(activeItem);

      if (activeItemPosition === 0) {
        prevItem = this.carouselItems[this.carouselItems.length - 1];
      } else {
        prevItem = this.carouselItems[activeItemPosition - 1];
      }
      this.slideTo(prevItem);
    }

    /**
     * INIT FUNCTIONS
     */

    /**
     * Create the indicators for the carousel
     * @returns {void}
     */
    this.createIndicators = function() {
      const indicatorContainer = this.selector.querySelector('#indicator-container');

      this.carouselItemsArray.map((item, index) => {
        const indicator = this.indicatorTemplate.content.firstElementChild.cloneNode(true);
        indicator.setAttribute('data-carousel-indicator', index);
        indicator.setAttribute('aria-label', `Slide ${index + 1}`);

        indicatorContainer.appendChild(indicator);

        const activeItem = this.getActiveItem();
        const activeItemIndex = this.getPositionOfItem(activeItem);

        if (index === activeItemIndex) {
          indicator.setAttribute('aria-current', 'true');
          indicator.querySelector('svg').classList.add('text-slate-400');
          indicator.querySelector('svg').classList.remove('text-white');
        }
        indicator.addEventListener('click', () => {
          this.setting.onIndicatorClickCallback && this.setting.onIndicatorClickCallback();
          this.slideTo(item);
        });
      });
    }

    this.displayIndex = function() {
      console.log(this.diplayItem)
    }

    /**
     * Function to initialise carousel
     * @returns {void}
     */
    this.init = function() {
      const activeItem = this.getActiveItem();

      const items = Array.from(this.carouselItems)
      items.map(item => {
        item.classList.add(
          'absolute',
          'inset-0',
          'transition-transform',
          'transform'
        )
      });
      /**
       * if no active item is set then first position is default
       */
      if (activeItem) {
        this.slideTo(activeItem);
      } else {
        this.slideTo(0)
      }
      /**
       * Add event listeners to the buttons if they exist
       */
      const nextButton = this.selector.querySelector('[data-carousel-next]');
      nextButton && nextButton.addEventListener('click', () => {
        this.next();
      });
      const prevButton = this.selector.querySelector('[data-carousel-prev]');
      prevButton && prevButton.addEventListener('click', () => {
        this.prev();
      });
    }
    // initialise the carousel
    this.init();
    // if we have an indicator template, create the indicators
    this.indicatorTemplate && this.createIndicators();
    this.diplayItem && this.displayIndex();
  };
  /**
   * Initialise carousels
   */

  let carousels = {};
  const allCarousels = document.querySelectorAll('[data-carousel]')
  allCarousels.forEach((carouselElement) => {
    carousels[carouselElement.id] = new Carousel(carouselElement);
  });

  const gallery = new Viewer(document.getElementById('images'), {
    navbar: true,
    title: false,
    toolbar: {
      zoomIn: 1,
      zoomOut: 1,
      oneToOne: 4,
      reset: 1,
      prev: 1,
      play: {
        show: false,
        size: 'large',
      },
      next: 1,
      rotateLeft: false,
      rotateRight: false,
      flipHorizontal: false,
      flipVertical: false,
    },
    transition: false
  });
</script>