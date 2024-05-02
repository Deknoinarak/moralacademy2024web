import Image from "next/image";
import Link from "next/link";

export default function Footer() {
  return (
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
            <Link
              href="https://moralcenter.or.th/%E0%B8%A8%E0%B8%B9%E0%B8%99%E0%B8%A2%E0%B9%8C%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1/%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B9%80%E0%B8%A3%E0%B8%B2/%E0%B8%95%E0%B8%B4%E0%B8%94%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B9%80%E0%B8%A3%E0%B8%B2.html"
              className="mt-5 block underline text-blue-700 hover:text-blue-900 transition-all w-fit"
            >
              ติดต่อเรา | Contact Us
            </Link>
          </div>
          <div className="items-center flex flex-col justify-center w-full py-5 md:py-0">
            <h2 className="text-xl mb-3">GET IN TOUCH</h2>
            <div className="flex">
              <Link
                href="https://www.facebook.com/MoralCenter"
                target="_blank"
                rel="noopener"
                className="group"
              >
                <Image
                  src="https://moralcenter.or.th/images/2022-homepage/Face-icon-1.png"
                  alt="social 1"
                  width="50"
                  height="48"
                  className="rounded-full group-hover:ring transition-all"
                />
              </Link>
              <Link
                href="https://www.youtube.com/user/moralcenter"
                target="_blank"
                rel="noopener"
                className="group"
              >
                <Image
                  src="https://moralcenter.or.th/images/2022-homepage/YT-icon.png"
                  alt="social 2"
                  width="50"
                  height="48"
                  className="rounded-full group-hover:ring transition-all"
                />
              </Link>
              <Link
                href="https://lin.ee/zJD2MPC"
                target="_blank"
                rel="noopener"
                className="group"
              >
                <Image
                  src="https://moralcenter.or.th/images/2022-homepage/Line-icon.png"
                  alt="social 3"
                  width="50"
                  height="48"
                  className="rounded-full group-hover:ring transition-all"
                />
              </Link>
              <Link
                href="https://twitter.com/moralcenter_th"
                target="_blank"
                rel="noopener"
                className="group"
              >
                <Image
                  src="https://moralcenter.or.th/images/2022-homepage/twitter.png"
                  alt="social 4"
                  width="50"
                  height="48"
                  className="rounded-full group-hover:ring transition-all"
                />
              </Link>
              <Link
                href="https://www.instagram.com/moralcenter_th/"
                target="_blank"
                rel="noopener"
                className="group"
              >
                <Image
                  src="https://moralcenter.or.th/images/2022-homepage/IG-icon.png"
                  alt="social 5"
                  width="50"
                  height="48"
                  className="rounded-full group-hover:ring transition-all"
                />
              </Link>
              <Link
                href="https://www.tiktok.com/@moralcenter_th"
                target="_blank"
                rel="noopener"
                className="group"
              >
                <Image
                  src="https://moralcenter.or.th/images/2022-homepage/tiktok-icon.png"
                  alt="social 6"
                  width="50"
                  height="48"
                  className="rounded-full group-hover:ring transition-all"
                />
              </Link>
            </div>
          </div>
        </div>
        <span className="flex w-full justify-center pt-3 text-xs">
          Copyright © 2024 IT CMP All rights reserved.
        </span>
      </div>
    </div>
  );
}
