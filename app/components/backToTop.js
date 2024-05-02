"use client";

import { Transition } from "@headlessui/react";
import { useEffect, useState } from "react";

export default function ToTopBtn() {
  const [showButton, setShowButton] = useState(false);

  useEffect(() => {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        setShowButton(true);
      } else {
        setShowButton(false);
      }
    });
  }, []);

  const scrollToTop = () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth", // for smoothly scrolling
    });
  };

  return (
    <Transition
      show={showButton}
      enter="transition-opacity duration-300"
      enterFrom="opacity-0"
      enterTo="opacity-100"
      leave="transition-opacity duration-300"
      leaveFrom="opacity-100"
      leaveTo="opacity-0"
    >
      <button
        id="to-top-button"
        onClick={scrollToTop}
        title="Go To Top"
        className={`fixed z-90 bottom-8 right-8 w-12 h-12 border-0 p-3 rounded-full drop-shadow-md bg-indigo-500 text-white text-2xl items-center justify-center flex transition-all`}
      >
        <i className="fa-solid fa-caret-up"></i>
      </button>
    </Transition>
  );
}
