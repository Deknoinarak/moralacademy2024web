import React from "react";
import { Link } from "react-router-dom";
import { motion } from "framer-motion";
import Lecturers from "../assets/lecturers";

const Home = () => {
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

          <iframe
            src="https://www.youtube.com/embed/ZiwWXe47KxY"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerPolicy="strict-origin-when-cross-origin"
            allowFullScreen
            className="my-5 w-full aspect-video max-w-screen-lg"
          ></iframe>
          <iframe
            src="https://www.youtube.com/embed/M7eO6YP0pd0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerPolicy="strict-origin-when-cross-origin"
            allowFullScreen
            className="my-5 w-full aspect-video max-w-screen-lg"
          ></iframe>

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
              {Lecturers.map((el, i) => (
                <Link
                  key={i}
                  to={el.history && `/mlc/${el.id}`}
                  className="flex md:block gap-4 items-center md:justify-between xl:w-1/6 md:w-1/4 lg:w-1/5 group"
                >
                  <img
                    src={`/mlc/assets/img/lecturers/${el.id}.png`}
                    alt=""
                    className="bg-white rounded-full group-hover:scale-[1.02] transition-all w-32 md:w-full"
                  />
                  <div className="text-left md:text-center mt-2">
                    <div className="text-sky-200 group-hover:text-white text-lg font-bold mb-0 pb-0 break-words">
                      {el.name}
                    </div>
                    <span className="text-sky-200 group-hover:text-white block">
                      {el.role}
                    </span>
                    {el.subtitle && (
                      <span className="text-sky-200 text-xs font-bold">
                        {el.subtitle}
                      </span>
                    )}
                  </div>
                </Link>
              ))}
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
                "ปรัชญาของเศรษฐกิจพอเพียง"
              </p>
            </div>
          </div>
        </div>
      </div>
    </motion.div>
  );
};

export default Home;
