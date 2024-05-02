import localFont from "next/font/local";
import "./globals.css";
import NavBar from "./ui/navbar";
import Sponsors from "./ui/sponsors";
import Download from "./ui/download";
import ToTopBtn from "./ui/backToTop";
import Footer from "./ui/footer";

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
          `bg-[#010477] bg-[url('https://academy.moralcenter.or.th/mlc/assets/img/mainbg.png')] bg-cover bg-no-repeat bg-center bg-fixed text-white ` +
          lineSeed.className
        }
      >
        <div className="w-full">
          <NavBar />

          {children}

          <Sponsors />
          <Download />

          <Footer />
        </div>

        <ToTopBtn />
      </body>
    </html>
  );
}
