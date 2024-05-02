import localFont from "next/font/local";
import "./globals.css";
import NavBar from "./components/navbar";
import Sponsors from "./components/sponsors";
import Download from "./components/download";
import ToTopBtn from "./components/backToTop";
import Footer from "./components/footer";

const lineSeed = localFont({
  src: [
    {
      path: "./LINESeedSansTH_W_Rg.woff",
      weight: "400",
      style: "normal",
    },
    {
      path: "./LINESeedSansTH_W_Bd.woff",
      weight: "700",
      style: "normal",
    },
  ],
  variable: "--font-lineseed",
});

export const metadata = {
  title: "โครงการพัฒนาชุมชน ผู้นำคุณธรรมวิถียั่งยืน รุ่นที่ 1 - Moral Academy",
  description:
    "Moral Academy By CMP's MLC is a course for leaders/exectutives to develop a moral leaders community to develop a sustainable moral community in the society.",
};

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <head>
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        />
        <link rel="preload" href={"/assets/img/Logo187.webp"} as="image" />
        <link rel="preload" href={"/assets/img/MLC1.png"} as="image" />
        <meta
          name="google-site-verification"
          content="uvNWpS9GXZx0tIja6ByT2G3Azr6Z6BqIl0Tk2tGOG6k"
        />
        <meta
          name="google-site-verification"
          content="qh0nb2Q4XwmU8HdvDtRSmJRmJbaj13LgNk_gowTPNOQ"
        />
      </head>
      <body
        className={
          `bg-[#010477] bg-[url('/assets/img/mainbg.webp')] bg-cover bg-no-repeat bg-center bg-fixed text-white ` +
          lineSeed.className
        }
      >
        <div className="w-full">
          <NavBar />

          {children}

          <Sponsors />
          <Download />

          <Footer />

          <ToTopBtn />
        </div>
      </body>
    </html>
  );
}
