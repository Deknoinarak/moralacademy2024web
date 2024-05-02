"use client";

import { motion, AnimatePresence } from "framer-motion";
import { usePathname } from "next/navigation";
import { LayoutRouterContext } from "next/dist/shared/lib/app-router-context.shared-runtime";
import { useContext, useRef } from "react";

function FrozenRouter(props) {
  const context = useContext(LayoutRouterContext ?? {});
  const frozen = useRef(context).current;

  return (
    <LayoutRouterContext.Provider value={frozen}>
      {props.children}
    </LayoutRouterContext.Provider>
  );
}

const variants = {
  hidden: { x: -20, opacity: 0, y: 0 },
  enter: { x: 0, opacity: 1, y: 0 },
  exit: { x: 100, opacity: 0, y: 0 },
};

const PageTransitionEffect = ({ children }) => {
  // The `key` is tied to the url using the `usePathname` hook.
  const key = usePathname();

  return (
    <AnimatePresence mode="popLayout">
      <motion.div
        key={key}
        initial="hidden"
        animate="enter"
        exit="exit"
        variants={variants}
        transition={{ duration: .7, ease: [0.6, -0.05, 0.01, 0.99] }}
      >
        <FrozenRouter>{children}</FrozenRouter>
      </motion.div>
    </AnimatePresence>
  );
};

export default PageTransitionEffect;
