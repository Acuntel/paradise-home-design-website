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
        }, 1100);
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

  // ------------------------------------------------------------
  // Lightbox: click a [data-lightbox] element to enlarge its photo
  // in place. No navigation, no dependencies.
  // ------------------------------------------------------------
  const triggers = document.querySelectorAll("[data-lightbox]");
  if (triggers.length) {
    const box = document.createElement("div");
    box.className = "pd-lightbox";
    box.setAttribute("role", "dialog");
    box.setAttribute("aria-modal", "true");
    box.setAttribute("aria-hidden", "true");
    box.innerHTML =
      '<button type="button" class="pd-lightbox-close" aria-label="Close">&times;</button>' +
      '<img class="pd-lightbox-img" src="" alt="">';
    document.body.appendChild(box);
    const img = box.querySelector(".pd-lightbox-img");

    const openBox = (src) => {
      img.src = src;
      box.classList.add("open");
      box.setAttribute("aria-hidden", "false");
      document.body.style.overflow = "hidden";
    };
    const closeBox = () => {
      box.classList.remove("open");
      box.setAttribute("aria-hidden", "true");
      document.body.style.overflow = "";
      img.src = "";
    };

    triggers.forEach((t) => {
      t.addEventListener("click", () => {
        const src = t.getAttribute("data-lightbox");
        if (src) openBox(src);
      });
    });
    box.addEventListener("click", (e) => {
      if (e.target === box || e.target.classList.contains("pd-lightbox-close"))
        closeBox();
    });
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && box.classList.contains("open")) closeBox();
    });
  }
})();
