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
      {
        protocol: "https",
        hostname: "img.icons8.com",
        port: "",
        pathname: "/**",
      },
    ],
  },
};

export default nextConfig;
