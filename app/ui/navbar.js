import Image from "next/image";

export default function NavBar() {
  return (
    <nav
      className="overflow-hidden sticky top-0 w-full flex justify-center bg-white sm:bg-[#010477] sm:justify-between sm:items-center shadow-lg text-white z-50 flex-col sm:flex-row items-center"
      id="navbar"
    >
      <div className="max-w-56 sm:max-w-none sm:max-h-32 md:max-h-32 lg:max-h-32 relative">
        <Image
          src="/mlc/assets/img/Logo187.webp"
          alt="Organized by: M-Culture, CMP"
          className="sm:max-w-none sm:max-h-32 md:max-h-32 lg:max-h-32 w-auto"
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
          src="/mlc/assets/img/MLC1.png"
          alt="MLC"
          className="w-32 mr-10"
          width={1361}
          height={935}
        />
      </div>
    </nav>
  );
}
