/** @type {import('next').NextConfig} */
const nextConfig = {
  basePath: "/mlc",
  images: {
    remotePatterns: [
      {
        protocol: "https",
        hostname: "moralcenter.or.th",
        port: "",
        pathname: "/images/**",
      },
    ],
  },
};

export default nextConfig;
