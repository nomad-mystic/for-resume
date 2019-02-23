export default {
  host: () => {
    return window.location.host;
  },
  origin: () => {
    return window.location.origin;
  },
  href: () => {
    return window.location.href;
  },
  pathname: () => {
    return window.location.path;
  },
  port: () => {
    return window.location.port;
  },
};
