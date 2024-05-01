import React from "react";
import { AnimatePresence } from "framer-motion";
import {
  createBrowserRouter,
  Route,
  RouterProvider,
  Routes,
  useLocation,
} from "react-router-dom";
import Layout from "./components/Layout";
import Home from "./view/Home";
import HistoryPage from "./view/History";
import NotFound from "./view/404";

const router = createBrowserRouter([
  {
    path: "/",
    element: <Layout />,
    children: [
      {
        path: "",
        element: <Home />,
      },
      {
        path: ":id",
        element: <HistoryPage />,
      },
    ],
  },
]);

const App = () => {
  const location = useLocation();

  return (
    <AnimatePresence mode="wait">
      <Routes location={location} key={location.pathname}>
        <Route path="/mlc/" element={<Layout />}>
          <Route index element={<Home />} />
          <Route path=":id" element={<HistoryPage />} />
          <Route path="*" element={<NotFound />} />
        </Route>
      </Routes>
    </AnimatePresence>
  );
};

export default App;
