import Image from "next/image";
import Link from "next/link";

export default function Download() {
  return (
    <div className="container mx-auto md:mt-10 mt-3 p-5 text-white">
      <div className="flex flex-col items-center justify-center">
        <div className="my-5 grid w-full gap-7 max-w-5xl">
          <div>
            <h3 className="rounded-2xl font-bold text-lg mr-3 block w-fit">
              COURSE DETAILS
            </h3>
            <h2 className="block text-xl md:text-3xl font-bold">
              รายละเอียดหลักสูตร
            </h2>
          </div>

          <div className="flex flex-col gap-5">
            <Link
              className="justify-center flex items-center px-5 py-3 rounded-full bg-white ring-2 ring-red-600 text-black hover:bg-gray-100 transition-all hover:scale-[1.02] hover:ring-4"
              href="/assets/CourseDetails_MoralAcademy2024MLC.pdf"
            >
              <div className="flex items-center gap-3">
                <Image
                  width="40"
                  height="40"
                  src="https://img.icons8.com/office/40/pdf.png"
                  alt="pdf"
                />
                <div className="flex gap-1.5">
                  รายละเอียดหลักสูตร
                  <span className="hidden md:flex items-center">
                    [
                    <span className="max-w-xs truncate inline-block">
                      CourseDetails_MoralAcademy2024MLC.pdf
                    </span>
                    ]
                  </span>
                  (3,206 kB)
                </div>
              </div>
            </Link>
          </div>
        </div>
      </div>
    </div>
  );
}
