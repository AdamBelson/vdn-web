const e = "system", t = "dark", c = "dark";
const o = "data-fr-theme", a = "data-fr-scheme";
const r = `:root[${o}], :root[${a}]`;

const applyDark = () => {
  document.documentElement.setAttribute(o, c);
  document.documentElement.style.colorScheme = "dark";
};

const checkSystem = () => {
  if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
    applyDark();
  }
};

(() => {
  if (document.documentElement.matches(r)) {
    const stored = (() => {
      try {
        return "localStorage" in window && window.localStorage !== null;
      } catch (e) {
        return false;
      }
    })() ? localStorage.getItem("scheme") : "";
    const attr = document.documentElement.getAttribute(a);

    switch (true) {
      case stored === t: applyDark(); break;
      case stored === e: checkSystem(); break;
      case attr === t: applyDark(); break;
      case attr === e: checkSystem(); break;
    }
  }
})();
