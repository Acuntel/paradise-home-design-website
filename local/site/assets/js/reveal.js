/* Paradise Home Design — reveal-on-scroll + preloader + nav scroll state.
   Vanilla, ~50 lines, no dependencies. */
(function () {
  "use strict";

  // ------------------------------------------------------------
  // Preloader: dismiss after 2.4s. Only fires once per session.
  // ------------------------------------------------------------
  const preloader = document.querySelector(".pd-preloader");
  if (preloader) {
    if (sessionStorage.getItem("pd_preloaded")) {
      preloader.classList.add("dismissed");
      preloader.style.transition = "none";
    } else {
      window.addEventListener("load", () => {
        setTimeout(() => {
          preloader.classList.add("dismissed");
          sessionStorage.setItem("pd_preloaded", "1");
        }, 2400);
      });
    }
  }

  // ------------------------------------------------------------
  // Reveal on scroll via IntersectionObserver
  // ------------------------------------------------------------
  if ("IntersectionObserver" in window) {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            e.target.classList.add("is-visible");
            io.unobserve(e.target);
          }
        });
      },
      { threshold: 0.15, rootMargin: "0px 0px -10% 0px" },
    );
    document.querySelectorAll("[data-reveal]").forEach((el) => io.observe(el));
  } else {
    document
      .querySelectorAll("[data-reveal]")
      .forEach((el) => el.classList.add("is-visible"));
  }

  // ------------------------------------------------------------
  // Nav: add .scrolled when past hero
  // ------------------------------------------------------------
  const nav = document.querySelector(".pd-nav");
  if (nav) {
    const onScroll = () => {
      nav.classList.toggle("scrolled", window.scrollY > 80);
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  // ------------------------------------------------------------
  // Mobile menu toggle
  // ------------------------------------------------------------
  const hamburger = document.querySelector(".pd-nav-hamburger");
  const overlay = document.querySelector(".pd-nav-overlay");
  if (hamburger && overlay) {
    const close = () => {
      overlay.classList.remove("open");
      document.body.style.overflow = "";
    };
    hamburger.addEventListener("click", () => {
      const isOpen = overlay.classList.toggle("open");
      document.body.style.overflow = isOpen ? "hidden" : "";
    });
    overlay
      .querySelectorAll("a")
      .forEach((a) => a.addEventListener("click", close));
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") close();
    });
  }
})();
