import PageTransitionEffect from '../PageExitTransition';

const PageTransitionLayout = ({ children }) => {
  return <PageTransitionEffect>{children}</PageTransitionEffect>;
};

export default PageTransitionLayout;
