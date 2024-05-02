"use client";

import { notFound } from "next/navigation";
import Link from "next/link";
import lecturers from "@/data/lecturers";
import { useLayoutEffect } from "react";
import Image from "next/image";

export default function Page({ params }) {
  const data = lecturers.find((item) => item.id.toString() == params.id);

  useLayoutEffect(() => {
    window.scrollTo(0, 0);
  });

  if (!data.history) {
    notFound();
  } else {
    return (
      <div className="flex flex-col items-start justify-center max-w-5xl mx-auto">
        <Link
          href={"/mlc/"}
          className="mb-5 underline text-sky-300 hover:text-sky-200 transition-all"
        >
          {"<"} กลับไปหน้าแรก
        </Link>
        <header className="md:mb-10 mb-3">
          <h1 className="text-2xl md:text-4xl font-bold text-sky-300 pr-3">
            ประวัติ
          </h1>
          <h2 className="text-2xl md:text-5xl font-bold text-white">
            {data.name}
          </h2>
        </header>

        <Image
          width={0}
          height={0}
          src={`/assets/history/${data.id}.jpg`}
          alt=""
          sizes="100vw"
          className="w-full h-auto"
        />
      </div>
    );
  }
}
