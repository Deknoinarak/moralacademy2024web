'use client'

import Image from "next/image";
import { motion } from "framer-motion";

export default function NavBar() {
  return (
    <motion.nav
      className="overflow-hidden sticky top-0 w-full flex justify-center bg-white sm:bg-[#010477] sm:justify-between sm:items-center shadow-lg text-white z-50 flex-col sm:flex-row items-center"
      id="navbar"
      initial={{ y: -20, opacity: 0 }}
      animate={{ y: 0, opacity: 1 }}
      transition={{ duration: 0.7, ease: [0.6, -0.05, 0.01, 0.99] }}
    >
      <div className="max-w-56 sm:max-w-none sm:max-h-32 md:max-h-32 lg:max-h-32 relative">
        <Image
          src="/assets/img/Logo187.webp"
          alt="Organized by: M-Culture, CMP"
          className="sm:max-w-none sm:max-h-32 md:max-h-32 lg:max-h-32 w-auto"
          loading="eager"
          fetchPriority="high"
          priority={true}
          width={499}
          height={187}
        />
      </div>

      <div className="flex items-center bg-[#010477] w-full justify-center py-2">
        <div className="hidden lg:block px-5 xl:text-lg text-right">
          <div>MORAL LEADERS COMMUNITY FOR</div>
          <div>SUSTAINABLE DEVELOPMENT FORUM 2024</div>
        </div>
        <Image
          src="/assets/img/MLC1.png"
          loading="eager"
          fetchPriority="high"
          alt="MLC"
          priority={true}
          className="w-32 mr-10"
          width={1361}
          height={935}
        />
      </div>
    </motion.nav>
  );
}
