<button id="to-top-button" onclick="scrollToTop()" class="fixed z-90 bottom-8 right-8 w-12 h-12 border-0 p-3 rounded-full drop-shadow-md bg-indigo-500 text-white text-2xl items-center justify-center flex transition-all">
  <i class="fa-solid fa-caret-up"></i>
</button>

<script>
  const toTopButton = document.getElementById("to-top-button");

  window.onscroll = () => {
    if (
      document.body.scrollTop > 200 ||
      document.documentElement.scrollTop > 200
    ) {
      toTopButton.classList.add("flex");
      toTopButton.classList.remove("hidden");
    } else {
      toTopButton.classList.add("hidden");
      toTopButton.classList.remove("flex");
    }
  };

  const scrollToTop = () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth", // for smoothly scrolling
    });
  };
</script>