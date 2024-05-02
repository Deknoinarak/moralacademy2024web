"use client";

export default function Template({ children }) {
  return (
    <div className="container mx-auto md:my-10 mt-3 p-5">
      {children}
    </div>
  );
}
