import React, { useEffect, useLayoutEffect, useState } from "react";
import { Link, useParams } from "react-router-dom";
import { motion } from "framer-motion";
import Lecturers from "../assets/lecturers";
import NotFound from "./404";

const HistoryPage = () => {
  const params = useParams();
  const [historyInfo, setHistoryInfo] = useState({});

  useLayoutEffect(() => {
    window.scrollTo(0, 0);
  });

  useEffect(() => {
    const info = Lecturers.filter((obj) => {
      return obj.id == params.id;
    })[0];

    setHistoryInfo(info);
  }, []);

  if (historyInfo && historyInfo.history) {
    return (
      <motion.div
        className="block static"
        id="wrapper"
        initial={{ y: -20, opacity: 0 }}
        animate={{ y: 0, opacity: 1 }}
        transition={{ duration: 0.7, ease: [0.6, -0.05, 0.01, 0.99] }}
      >
        <div className="container mx-auto md:mt-10 mt-3 p-5 text-white max-w-5xl">
          <div className="flex flex-col items-start justify-center">
            <Link to={"/mlc/"} className="mb-5 underline text-sky-300 hover:text-sky-200 transition-all">{"<"} กลับไปหน้าแรก</Link>
            <header className="md:mb-10 mb-3">
              <h1 className="text-2xl md:text-4xl font-bold text-sky-300 pr-3">
                ประวัติ
              </h1>
              <h2 className="text-2xl md:text-5xl font-bold text-white">
                {historyInfo.name}
              </h2>
            </header>

            <img src={`/mlc/assets/history/${historyInfo.id}.jpg`} alt className="w-full" />
          </div>
        </div>
      </motion.div>
    );
  } else {
    return <NotFound />;
  }
};

export default HistoryPage;
