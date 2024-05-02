"use client";

import LiteYouTubeEmbed from "react-lite-youtube-embed";
import Link from "next/link";
import Image from "next/image";
import { motion } from "framer-motion";
import { useEffect, useState } from "react";
// import lecturers from "../public/assets/lecturers.js";

export default function Home() {
  const [data, setData] = useState(null);
  const [isLoading, setLoading] = useState(true);

  useEffect(() => {
    fetch("/mlc/api/lecturers")
      .then((res) => res.json())
      .then((data) => {
        setData(data);
        setLoading(false);
      });
  }, []);

  return (
    <motion.div
      className="block static"
      id="wrapper"
      initial={{ y: -20, opacity: 0 }}
      animate={{ y: 0, opacity: 1 }}
      transition={{ duration: 0.7, ease: [0.6, -0.05, 0.01, 0.99] }}
    >
      <div className="container mx-auto md:mt-10 mt-3 p-5 text-white">
        <div className="flex flex-col items-center justify-center">
          <header className="md:mb-10 mb-3">
            <div className="flex items-baseline flex-col lg:flex-row">
              <h1 className="text-2xl md:text-4xl font-bold text-sky-300 pr-3">
                โครงการพัฒนาชุมชน
              </h1>
              <h2 className="text-2xl md:text-5xl font-bold text-white">
                ผู้นำคุณธรรมวิถียั่งยืน รุ่นที่ 1
              </h2>
            </div>
            <h3 className="pt-2 text-sm md:text-base">
              ภายใต้แนวคิด : Catalyzing Change : Moral leadership for
              Sustainable Impact
            </h3>
          </header>

          <LiteYouTubeEmbed
            aspectHeight={9}
            aspectWidth={16}
            wrapperClass="yt-lite w-full h-full aspect-video max-w-screen-lg my-5 bg-cover bg-center"
            id="ZiwWXe47KxY"
            title="YouTube Embed"
            webp
          />
          <LiteYouTubeEmbed
            aspectHeight={9}
            aspectWidth={16}
            wrapperClass="yt-lite w-full h-full aspect-video max-w-screen-lg my-5 bg-cover bg-center"
            id="M7eO6YP0pd0"
            title="YouTube Embed"
            webp
          />

          <section className="flex justify-center items-center my-5 mb-8 flex-col gap-3 md:gap-0">
            <div className="my-7">
              <h1 className="text-xs md:text-xl font-bold text-sky-300 pr-3 uppercase">
                Keynote Speakers, executives, and lecturers
              </h1>
              <h2 className="text-2xl md:text-5xl font-bold text-white">
                องค์ปาฐกถา ผู้บริหาร และวิทยากร
              </h2>
            </div>
            <div
              id="lecturers"
              className="flex flex-col md:flex-row w-full gap-5 justify-center flex-wrap"
            >
              {isLoading && (
                <div className="flex items-center justify-center my-10">
                  <span className="loading loading-spinner loading-lg mr-3"></span>{" "}
                  <span className="font-bold text-lg">Loading...</span>
                </div>
              )}
              {!isLoading &&
                data &&
                data.map((el, i) => {
                  return (
                    <Link
                      key={i}
                      href={el.history ? `/${el.id}` : ""}
                      className={`flex md:block gap-4 items-center md:justify-between xl:w-1/6 md:w-1/4 lg:w-1/5 group ${
                        !el.history && "pointer-events-none"
                      }`}
                      aria-disabled={!el.history}
                      tabIndex={!el.history ? -1 : undefined}
                    >
                      <Image
                        width={320}
                        height={320}
                        src={`/mlc/assets/img/lecturers/${el.id}.png`}
                        alt=""
                        className="bg-white rounded-full group-hover:scale-[1.02] transition-all w-32 md:w-full"
                      />
                      <div className="text-left md:text-center mt-2">
                        <div
                          className="text-sky-200 group-hover:text-white text-lg font-bold mb-0 pb-0 break-words"
                          dangerouslySetInnerHTML={{ __html: el.name }}
                        ></div>
                        <div
                          className="text-sky-200 group-hover:text-white block"
                          dangerouslySetInnerHTML={{ __html: el.role }}
                        ></div>
                        {el.subtitle && (
                          <div
                            className="text-sky-200 text-xs font-bold"
                            dangerouslySetInnerHTML={{ __html: el.subtitle }}
                          ></div>
                        )}
                      </div>
                    </Link>
                  );
                })}
            </div>
          </section>

          <div className="my-5 grid w-full gap-7 max-w-5xl">
            <div>
              <h3 className="rounded-2xl font-bold text-2xl mr-3 block w-fit">
                วันที่
              </h3>
              <p className="block text-xl md:text-3xl font-bold">
                24 เมษายน - 19 มิถุนายน พ.ศ. 2567
              </p>
            </div>
            <div>
              <h3 className="rounded-2xl font-bold text-2xl mr-3 block mb-2 w-fit">
                สถานที่
              </h3>
              <p className="block md:text-xl indent-5">
                - โรงแรมเดอะสุโกศล กรุงเทพฯ
              </p>
              <p className="block md:text-xl indent-5">
                - คณะแพทยศาสตร์จุฬาลงกรณ์มหาวิทยาลัย
              </p>
              <p className="block md:text-xl indent-5">
                - บริษัท ดีทีจีโอ คอร์ปอเรชั่น จำกัด (DTGO Campus)
              </p>
            </div>
            <div>
              <h3 className="rounded-2xl font-bold text-2xl mr-3 block mb-2 w-fit">
                เป้าหมาย
              </h3>
              <p className="block md:text-xl indent-5">
                - <b className="text-sky-200">สร้างชุมชน</b>
                ผู้บริหารหัวใจคุณธรรมจำนวนกว่า{" "}
                <b className="text-sky-200">
                  30 คน จาก 5 เครือข่ายทางสังคม
                </b>{" "}
                ต่อยอดสู่ Moral Team Thailand
                เพื่อร่วมออกแบบสังคมคุณธรรมในบริบทใหม่
              </p>
              <p className="block md:text-xl indent-5">
                - <b className="text-sky-200">สร้างสังคม</b> ของการแลกเปลี่ยน
                เรียนรู้ และแบ่งปัน
                <b className="text-sky-200">ทรัพยากรการทำงานข้ามเครือข่าย</b>
              </p>
              <p className="block md:text-xl indent-5">
                -{" "}
                <b className="text-sky-200">
                  ออกแบบโครงการพัฒนาเศรษฐกิจ สังคม สิ่งแวดล้อม และวัฒนธรรม
                  สู่ความยั่งยืนด้วยแนวทางและปณิธาน
                </b>{" "}
                &quot;ปรัชญาของเศรษฐกิจพอเพียง&quot;
              </p>
            </div>
          </div>
        </div>
      </div>
    </motion.div>
  );
}

async function getData() {
  const res = await fetch("/mlc/api/lecturers");

  if (!res.ok) {
    // This will activate the closest `error.js` Error Boundary
    throw new Error("Failed to fetch data");
  }

  return res.json();
}
