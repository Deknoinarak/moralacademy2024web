import Image from "next/image";

export default function Sponsors() {
  return (
    <div className="bg-white w-full text-gray-800 py-3">
      <div className="container mx-auto px-5">
        <div className="hidden md:grid grid-cols-subgrid grid-flow-col gap-10">
          <div className="col-span-3 border-r-4 border-transparent pr-4">
            <h3 className="text-2xl text-[#0d68a3] block font-bold pb-5 pt-3">
              พาร์ทเนอร์ | Partners
            </h3>
          </div>
          <h3 className="text-2xl text-[#0d68a3] block font-bold pb-5 pt-3 col-span-4">
            สปอนเซอร์ | Sponsors
          </h3>
        </div>

        <div className="grid grid-cols-subgrid md:grid-flow-col gap-10 pb-5 justify-items-center items-center">
          <h3 className="md:hidden text-2xl text-[#0d68a3] block font-bold mt-5">
            พาร์ทเนอร์ | Partners
          </h3>
          <Image
            width={200}
            height={200}
            src="/mlc/assets/img/logo/fff.jpg"
            alt="มูลนิธิดั่งพ่อสอน"
            className="w-44"
          />
          <Image
            width={200}
            height={200}
            src="/mlc/assets/img/logo/fmchula.jpg"
            alt="คณะแพทย์จุฬาฯ"
            className="w-44"
          />
          <div className="md:border-r-4 border-[#0d68a3] md:pr-10 min-w-full flex justify-center border-b-4 pb-10 md:border-b-0 md:pb-0">
            <Image
              width={200}
              height={200}
              src="/mlc/assets/img/logo/dtgo.png"
              alt="DTGO"
              className="w-44"
            />
          </div>

          <h3 className="md:hidden text-2xl text-[#0d68a3] block font-bold">
            สปอนเซอร์ | Sponsors
          </h3>
          <Image
            width={200}
            height={200}
            src="/mlc/assets/img/logo/cmg.svg"
            alt="CMG"
            className="w-44"
          />
          <Image
            width={1366}
            height={768}
            src="/mlc/assets/img/logo/cg.jpeg"
            alt="CENTRALGROUP"
            className="w-44"
          />
          <Image
            width={1366}
            height={768}
            src="/mlc/assets/img/logo/pea.jpg"
            alt="PEA"
            className="w-44"
          />
          <Image
            width={1366}
            height={768}
            src="/mlc/assets/img/logo/scg.jpg"
            alt="SCG"
            className="w-44"
          />
        </div>
      </div>
    </div>
  );
}
