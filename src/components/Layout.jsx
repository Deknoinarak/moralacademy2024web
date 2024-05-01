import React, { useEffect, useState } from "react";
import { Outlet } from "react-router-dom";
import { Transition } from "@headlessui/react";

const Layout = () => {
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
    <div>
      <div className="w-full">
        <nav
          className="overflow-hidden sticky top-0 w-full flex justify-center bg-white sm:bg-[#010477] sm:justify-between sm:items-center shadow-lg text-white z-50 flex-col sm:flex-row items-center"
          id="navbar"
        >
          <div className="max-w-56 sm:max-w-none sm:max-h-32 md:max-h-32 lg:max-h-32">
            <img
              src="/mlc/assets/img/Logo187.webp"
              fetchpriority="high"
              alt="Organized by: M-Culture, CMP"
              className="sm:max-w-none sm:max-h-32 md:max-h-32 lg:max-h-32"
            />
          </div>

          <div className="flex items-center bg-[#010477] w-full justify-center py-2">
            <div className="hidden lg:block px-5 xl:text-lg text-right">
              <div>MORAL LEADERS COMMUNITY FOR</div>
              <div>SUSTAINABLE DEVELOPMENT FORUM 2024</div>
            </div>
            <img src="/mlc/assets/img/MLC1.png" alt="MLC" className="w-32 mr-10" />
          </div>
        </nav>
        <Outlet />

        <div className="bg-white w-full text-gray-800 py-3">
          <div className="container mx-auto px-5">
            <div className="hidden md:grid grid-cols-subgrid grid-flow-col gap-10">
              <div className="col-span-3 border-r-4 border-transparent pr-4">
                <h3 className="text-2xl text-[#0d68a3] block font-bold pb-5 pt-3">
                  พาร์ทเนอร์ | Partners
                </h3>
              </div>
              <h3 className="text-2xl text-[#0d68a3] block font-bold pb-5 pt-3 col-span-4">
                สปอนเซอร์ | Sponsors
              </h3>
            </div>

            <div className="grid grid-cols-subgrid md:grid-flow-col gap-10 pb-5 justify-items-center items-center">
              <h3 className="md:hidden text-2xl text-[#0d68a3] block font-bold mt-5">
                พาร์ทเนอร์ | Partners
              </h3>
              <img
                src="/mlc/assets/img/logo/fff.jpg"
                alt="มูลนิธิดั่งพ่อสอน"
                className="w-44"
              />
              <img
                src="/mlc/assets/img/logo/fmchula.jpg"
                alt="คณะแพทย์จุฬาฯ"
                className="w-44"
              />
              <div className="md:border-r-4 border-[#0d68a3] md:pr-10 min-w-full flex justify-center border-b-4 pb-10 md:border-b-0 md:pb-0">
                <img
                  src="/mlc/assets/img/logo/dtgo.png"
                  alt="DTGO"
                  className="w-44"
                />
              </div>

              <h3 className="md:hidden text-2xl text-[#0d68a3] block font-bold">
                สปอนเซอร์ | Sponsors
              </h3>
              <img src="/mlc/assets/img/logo/cmg.svg" alt="CMG" className="w-44" />
              <img
                src="/mlc/assets/img/logo/cg.jpeg"
                alt="CENTRALGROUP"
                className="w-44"
              />
              <img src="/mlc/assets/img/logo/pea.jpg" alt="PEA" className="w-44" />
              <img src="/mlc/assets/img/logo/scg.jpg" alt="SCG" className="w-44" />
            </div>
          </div>
        </div>

        <div className="container mx-auto md:mt-10 mt-3 p-5 text-white">
          <div className="flex flex-col items-center justify-center">
            <div className="my-5 grid w-full gap-7 max-w-5xl">
              <div>
                <h3 className="rounded-2xl font-bold text-lg mr-3 block w-fit">
                  COURSE DETAILS
                </h3>
                <h2 className="block text-xl md:text-3xl font-bold">
                  รายละเอียดหลักสูตร
                </h2>
              </div>

              <div className="flex flex-col gap-5">
                <a
                  className="justify-center flex items-center px-5 py-3 rounded-full bg-white ring-2 ring-red-600 text-black hover:bg-gray-100 transition-all hover:scale-[1.02] hover:ring-4"
                  href="assets/CourseDetails_MoralAcademy2024MLC.pdf"
                >
                  <div className="flex items-center gap-3">
                    <img
                      width="40"
                      height="40"
                      src="https://img.icons8.com/office/40/pdf.png"
                      alt="pdf"
                    />
                    <div className="flex gap-1.5">
                      รายละเอียดหลักสูตร
                      <span className="hidden md:flex items-center">
                        [
                        <span className="max-w-xs truncate inline-block">
                          CourseDetails_MoralAcademy2024MLC.pdf
                        </span>
                        ]
                      </span>
                      (3,206 kB)
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div className="md:mt-10 mt-3 p-5 text-[#0d68a3] bg-white">
          <div className="container mx-auto py-3 max-w-5xl">
            <div className="md:grid md:grid-cols-3 gap-5 px-5">
              <div className="col-span-2">
                <h2 className="text-2xl mb-2 font-bold">
                  ศูนย์คุณธรรม (องค์การมหาชน)
                </h2>
                <p className="text-lg">
                  เลขที่ 69 อาคารวิทยาลัยการจัดการ มหาวิทยาลัยมหิดล (CMMU) ชั้น
                  16-17 ถ.วิภาวดีรังสิต แขวงสามเสนใน เขตพญาไท กรุงเทพฯ 10400
                </p>
                <p className="pt-2">โทรศัพท์ : 0-2644-9900 ต่อ 309</p>
                <p>Fax : 0-2644-4901</p>
                <p>Mail : moralacademy@moralcenter.or.th</p>
                <a
                  href="https://moralcenter.or.th/%E0%B8%A8%E0%B8%B9%E0%B8%99%E0%B8%A2%E0%B9%8C%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1/%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B9%80%E0%B8%A3%E0%B8%B2/%E0%B8%95%E0%B8%B4%E0%B8%94%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B9%80%E0%B8%A3%E0%B8%B2.html"
                  className="mt-5 block underline text-blue-700 hover:text-blue-900 transition-all w-fit"
                >
                  ติดต่อเรา | Contact Us
                </a>
              </div>
              <div className="items-center flex flex-col justify-center w-full py-5 md:py-0">
                <h2 className="text-xl mb-3">GET IN TOUCH</h2>
                <div className="flex">
                  <a
                    href="https://www.facebook.com/MoralCenter"
                    target="_blank"
                    rel="noopener"
                    className="group"
                  >
                    <img
                      src="https://moralcenter.or.th/images/2022-homepage/Face-icon-1.png"
                      alt="social 1"
                      width="50"
                      height="48"
                      className="rounded-full group-hover:ring transition-all"
                    />
                  </a>
                  <a
                    href="https://www.youtube.com/user/moralcenter"
                    target="_blank"
                    rel="noopener"
                    className="group"
                  >
                    <img
                      src="https://moralcenter.or.th/images/2022-homepage/YT-icon.png"
                      alt="social 2"
                      width="50"
                      height="48"
                      className="rounded-full group-hover:ring transition-all"
                    />
                  </a>
                  <a
                    href="https://lin.ee/zJD2MPC"
                    target="_blank"
                    rel="noopener"
                    className="group"
                  >
                    <img
                      src="https://moralcenter.or.th/images/2022-homepage/Line-icon.png"
                      alt="social 3"
                      width="50"
                      height="48"
                      className="rounded-full group-hover:ring transition-all"
                    />
                  </a>
                  <a
                    href="https://twitter.com/moralcenter_th"
                    target="_blank"
                    rel="noopener"
                    className="group"
                  >
                    <img
                      src="https://moralcenter.or.th/images/2022-homepage/twitter.png"
                      alt="social 4"
                      width="50"
                      height="48"
                      className="rounded-full group-hover:ring transition-all"
                    />
                  </a>
                  <a
                    href="https://www.instagram.com/moralcenter_th/"
                    target="_blank"
                    rel="noopener"
                    className="group"
                  >
                    <img
                      src="https://moralcenter.or.th/images/2022-homepage/IG-icon.png"
                      alt="social 5"
                      width="50"
                      height="48"
                      className="rounded-full group-hover:ring transition-all"
                    />
                  </a>
                  <a
                    href="https://www.tiktok.com/@moralcenter_th"
                    target="_blank"
                    rel="noopener"
                    className="group"
                  >
                    <img
                      src="https://moralcenter.or.th/images/2022-homepage/tiktok-icon.png"
                      alt="social 6"
                      width="50"
                      height="48"
                      className="rounded-full group-hover:ring transition-all"
                    />
                  </a>
                </div>
              </div>
            </div>
            <span className="flex w-full justify-center pt-3 text-xs">
              Copyright © 2024 IT CMP All rights reserved.
            </span>
          </div>
        </div>
      </div>

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
    </div>
  );
};

export default Layout;
