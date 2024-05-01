import React from "react";
import { Link } from "react-router-dom";
import { motion } from "framer-motion";

const NotFound = () => {
  return (
    <motion.div
      className="block static"
      id="wrapper"
      initial={{ y: -20, opacity: 0 }}
      animate={{ y: 0, opacity: 1 }}
      transition={{ duration: 0.7, ease: [0.6, -0.05, 0.01, 0.99] }}
    >
      <div className="container mx-auto md:mt-10 mt-3 p-5 text-white max-w-5xl mb-10">
        <div className="flex flex-col items-center justify-center text-center">
          <header className="md:mb-10 mb-3 text-center">
            <h2 className="text-2xl md:text-5xl font-bold text-white uppercase">
              <span className="text-sky-300">404</span> Not Found
            </h2>
          </header>

          <p className="uppercase font-bold text-sm md:text-lg">The page you were looking for does not exist.</p>
          <p className="uppercase md:text-sm text-xs mb-10">You may have mistyped the address or the page may have moved.</p>

          <Link to={"/"} className="uppercase text-sm text-sky-300 underline hover:text-sky-200 transition-all">Take me Home!</Link>
        </div>
      </div>
    </motion.div>
  );
};

export default NotFound;
