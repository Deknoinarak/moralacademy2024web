"use client";

import { useParams } from "next/navigation";
import { notFound } from "next/navigation";
import Link from "next/link";
import { motion } from "framer-motion";
import { useEffect, useLayoutEffect, useState } from "react";
import Image from "next/image";

export default function Page() {
  const params = useParams();
  const [historyInfo, setHistoryInfo] = useState({});
  const [data, setData] = useState(null);
  const [isLoading, setLoading] = useState(true);

  useLayoutEffect(() => {
    window.scrollTo(0, 0);
  });

  useEffect(() => {
    fetch("/mlc/api/lecturers")
      .then((res) => res.json())
      .then((data) => {
        setData(data);
        setLoading(false);
      });
  }, []);

  useEffect(() => {
    if (data && !isLoading) {
      const info = data.filter((obj) => {
        return obj.id == params.id;
      });

      if (info.length <= 0) {
        setHistoryInfo(false);
      } else {
        setHistoryInfo(info[0]);
      }
    }
  }, [data, isLoading, params.id]);

  if (isLoading) {
    return (
      <div className="flex items-center justify-center my-10">
        <span className="loading loading-spinner loading-lg mr-3"></span>{" "}
        <span className="font-bold text-lg">Loading...</span>
      </div>
    );
  } else {
    if (!historyInfo && !historyInfo.history) {
      notFound();
    } else {
      return (
        <motion.div
          className="block static"
          id="wrapper"
          initial={{ y: -20, opacity: 0 }}
          animate={{ y: 0, opacity: 1 }}
          transition={{ duration: 0.7, ease: [0.6, -0.05, 0.01, 0.99] }}
        >
          <div className="container mx-auto md:mt-10 mt-3 p-5 mb-10 text-white max-w-5xl">
            <div className="flex flex-col items-start justify-center">
              <Link
                href={"/"}
                className="mb-5 underline text-sky-300 hover:text-sky-200 transition-all"
              >
                {"<"} กลับไปหน้าแรก
              </Link>
              <header className="md:mb-10 mb-3">
                <h1 className="text-2xl md:text-4xl font-bold text-sky-300 pr-3">
                  ประวัติ
                </h1>
                <h2 className="text-2xl md:text-5xl font-bold text-white">
                  {historyInfo.name}
                </h2>
              </header>

              <Image
                width={0}
                height={0}
                src={`/mlc/assets/history/${historyInfo.id}.jpg`}
                alt=""
                sizes="100vw"
                className="w-full h-auto"
              />
            </div>
          </div>
        </motion.div>
      );
    }
  }
}
