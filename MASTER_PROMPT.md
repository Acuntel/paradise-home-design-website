# MASTER PROMPT — Paradise Home Design Inc. Website Redesign

> Single source of truth for redesigning **paradisehomedesigninc.com** end-to-end.
> Future Claude sessions: read this top to bottom before touching a file. Execute in
> the phased order below. Never skip the design-system phase. Never push without a
> backup of the file being replaced.

---

## 0. Mission

Take a **dated, blocky 2015-era PHP Bootstrap site** and turn it into a **premium,
clean, mobile-first kitchen-remodeling experience** that matches the quality of
Paradise's actual work (their finished-kitchen photos are stunning — the website
hides that).

### What's broken today

- **Fonts:** Arial / Helvetica (default browser stack). Generic, lifeless.
- **Stack:** Bootstrap 4 + Font Awesome 4 + jQuery + Animate.css + MeanMenu + Magnific
  Popup + Swiper + 270 KB legacy `main.css`. 8 competing CSS files.
- **Mobile:** broken offcanvas drawer pattern, font sizes too small, CTAs hidden,
  hero text overlaps imagery, tap targets under 44 px.
- **Visual hierarchy:** every section looks the same. No rhythm. Blocky paragraphs.
- **Floating CTA:** ugly gold "Open Form" button with inline CSS, low z-index issues.
- **Pages duplicate:** `buffalo_grove.php` and `buffalo_grove_2.php`, `highland.php`
  and `highland_2.php` and `highland_3.php`, `captcha.php`/`captcha1.php`/`captchas.php`.
- **Content:** information is good but written in long blocky paragraphs. Needs
  rewrite into scannable, conversion-oriented copy.
- **No HTTPS:** SSL cert expired. Fix before relaunch.
- **Security:** `.sucuriquarantine/` folder + suspicious `filter.php` artifact — past
  hack residue. Audit and remove during cleanup.

### What's already great (preserve)

- **Product photography** — finished-kitchen images are professional and the site's
  strongest asset. Keep all of them. The redesign is about giving them room to breathe.
- **Local SEO foundation** — schema.org LocalBusiness markup, Lake Forest IL targeting,
  Google verification files, location-specific landing pages. Don't lose this.
- **The CMS dashboard** — owner edits content through `/dashboard`. Keep it functional.
- **Brand showcase pages** — Candlelight, Fabuwood, Homecrest, Mercier, Mirage, Kahrs.
  Re-skin them, don't delete them.

---

## 1. Design Reference

Brady's design language across his three reference sites (RealLaw, art-website,
Sher LLP) is consistent. **Lift the shared moves.** See `docs/DESIGN_LANGUAGE.md`
for the full audit. The condensed version:

| Move                            | Use it here                                                                                          |
| ------------------------------- | ---------------------------------------------------------------------------------------------------- |
| Playfair Display + Outfit       | Headings in Playfair Display, body in Outfit (same pairing the art-website uses)                     |
| Cream OR near-black backgrounds | Light sections on warm cream `#FBF8F1`, dark sections on `#0E1A11` (forest near-black)               |
| Warm accent + dark base         | Brushed brass `#B58C45` on deep forest `#1C2A1F`                                                     |
| Cubic-bezier easing             | `cubic-bezier(0.22, 1, 0.36, 1)` for every transition                                                |
| Hero pattern                    | Full-bleed kitchen photo + dark gradient overlay + radial accent glows + staggered text reveal       |
| Preloader sequence              | Lift directly from art-website — Playfair Paradise name + brass line growing horizontally (see §1.5) |
| Uppercase nav                   | Letter-spacing `0.15em`, weight 500, underline reveal on hover                                       |
| Button lift hover               | `translateY(-2px)` + shadow boost on hover                                                           |
| Staggered grids                 | Testimonials/projects offset every-other row by `24px` on desktop                                    |
| Scroll indicator                | Brass-to-transparent gradient line that bounces at bottom of hero                                    |
| Mobile-first padding            | `px-4 sm:px-6 lg:px-8` mental model                                                                  |
| Generous vertical               | Sections breathe — `py-20 md:py-28` minimum for hero, `py-16 md:py-24` for others                    |

**Closest analog to lift the FEEL from:** RealLaw's navy/gold _gravitas_ + Sher LLP's
_editorial restraint_ + **art-website's preloader, dark hero, and portfolio-grid
showcase** for the finished kitchens. The art-website is the strongest match for what
Paradise should feel like — high-end, gallery-like, photograph-forward — and is also
the only reference that's vanilla HTML/CSS, which is exactly what we need for a PHP
site (no React port required).

---

## 1.5 Art-Website Moves to Steal (DIRECT LIFTS)

The AllianceCo art-website at `~/Desktop/Client Websites/art-website/index.html` is
a single 6,084-line static HTML file with embedded `<style>`. Almost every pattern in
it can be copy-pasted into a PHP partial. Lift these specific moves:

### 1.5.1 Preloader (lift verbatim, swap text)

Plays once on first load. ~2.8s total, then slides up off-screen.

```html
<div class="preloader" id="preloader">
  <div class="preloader-text">PARADISE</div>
  <div class="preloader-line"></div>
</div>
```

```css
.preloader {
  position: fixed;
  inset: 0;
  background: var(--paradise-forest-900);
  z-index: 9999;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  transition: transform 0.8s cubic-bezier(0.77, 0, 0.175, 1);
}
.preloader.dismissed {
  transform: translateY(-100%);
}
.preloader-text {
  font-family: var(--font-display);
  font-size: clamp(1.8rem, 4vw, 3.5rem);
  letter-spacing: 0.25em;
  color: var(--paradise-cream);
  opacity: 0;
  animation: preloaderFadeIn 1s 0.3s forwards;
}
.preloader-line {
  width: 0;
  height: 2px;
  background: var(--paradise-brass-500);
  margin-top: 1.5rem;
  animation: preloaderLineGrow 1.2s 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)
    forwards;
}
@keyframes preloaderFadeIn {
  to {
    opacity: 1;
  }
}
@keyframes preloaderLineGrow {
  to {
    width: 200px;
  }
}
```

```javascript
window.addEventListener("load", () => {
  setTimeout(
    () => document.getElementById("preloader")?.classList.add("dismissed"),
    2400,
  );
});
```

Set a `sessionStorage` flag so it only fires on the first visit per session, not on
every page click. The art-website does this — match it.

### 1.5.2 Hero with radial gradient glow (lift verbatim)

The art-website hero combines a near-black base with two radial gradients that give
it depth without a single pixel of imagery. For Paradise, layer this UNDER the
kitchen hero photo at lower opacity so the photo dominates but the glow remains.

```css
.hero {
  position: relative;
  width: 100%;
  height: 100vh;
  min-height: 600px;
  overflow: hidden;
  background:
    radial-gradient(
      ellipse at 30% 50%,
      rgba(181, 140, 69, 0.1) 0%,
      transparent 60%
    ),
    radial-gradient(
      ellipse at 70% 80%,
      rgba(181, 140, 69, 0.06) 0%,
      transparent 50%
    ),
    var(--paradise-forest-900);
}

.hero-photo {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  opacity: 0.65; /* let the forest glow show through */
  z-index: 0;
}

.hero-photo::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(
    180deg,
    rgba(14, 26, 17, 0.4) 0%,
    rgba(14, 26, 17, 0.7) 100%
  );
}
```

### 1.5.3 Staggered hero reveal (lift verbatim, retune timing)

Art-website delays text 2.8s/2.95s/3.1s to wait out the preloader. Match that exact
cadence so the preloader-to-hero hand-off feels continuous.

```css
.hero-title,
.hero-subtitle,
.hero-description,
.hero-ctas,
.scroll-indicator {
  opacity: 0;
  transform: translateY(40px);
  animation: heroReveal 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
}
.hero-title {
  animation-delay: 2.8s;
}
.hero-subtitle {
  animation-delay: 2.95s;
}
.hero-description {
  animation-delay: 3.1s;
}
.hero-ctas {
  animation-delay: 3.25s;
}
.scroll-indicator {
  animation-delay: 3.4s;
}

@keyframes heroReveal {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
```

### 1.5.4 Scroll indicator (lift verbatim)

Brass gradient line that bounces. Sits bottom-center of hero.

```html
<div class="scroll-indicator">
  <span>Scroll</span>
  <div class="scroll-indicator-line"></div>
</div>
```

```css
.scroll-indicator {
  position: absolute;
  bottom: 3rem;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.75rem;
  z-index: 2;
}
.scroll-indicator span {
  font-size: 0.9rem;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--paradise-stone-300);
}
.scroll-indicator-line {
  width: 1px;
  height: 50px;
  background: linear-gradient(
    to bottom,
    var(--paradise-brass-500),
    transparent
  );
  animation: scrollBounce 2s infinite;
}
@keyframes scrollBounce {
  0%,
  100% {
    transform: translateY(0);
    opacity: 1;
  }
  50% {
    transform: translateY(10px);
    opacity: 0.5;
  }
}
```

### 1.5.5 Single-file CSS architecture (steal the discipline)

The art-website puts ALL its CSS inside one `<style>` block in the HTML head,
organized by section comments (`/* ============ HERO ============ */`). It's
~1,400 lines but FAST to load (no extra HTTP requests) and trivially debuggable.

**For Paradise:** put the new design system in **one** file — `assets/css/design-system.css`
— with the same `/* ===== SECTION ===== */` comment headers the art-website uses.
Don't fragment across 8 files like the current Bootstrap setup. One file. Cached
once. Done.

### 1.5.6 Section organization comments

Steal the exact comment style — it makes a long file scannable:

```css
/* ============================================================
   PRELOADER
   ============================================================ */

/* ============================================================
   HERO SECTION
   ============================================================ */

/* ============================================================
   NAVIGATION
   ============================================================ */
```

### 1.5.7 What NOT to lift from art-website

- The crimson `#c8352e` accent — too aggressive for a kitchen-design business. Stay with brass `#B58C45`.
- The all-black `#0a0a0a` page background as the _default_ — too gallery, too cold. Use it for the hero and the footer; everywhere else use warm cream `#FBF8F1`.
- The canvas-rendered abstract animation in the hero — replaced by kitchen photography. The kitchens ARE the visual content; they don't need a canvas to compete with.
- The single-word headlines ("AllianceCo") — Paradise needs slightly more copy because it's a service business, not a portfolio brand. Use the art-website's TYPOGRAPHIC restraint with slightly more words.

### 1.5.8 Net effect

When a visitor first lands on `paradisehomedesigninc.com`:

1. 0.0s — preloader: brass "PARADISE" word fades in on near-black
2. 0.8s — brass line grows under the word
3. 2.4s — preloader slides up
4. 2.8s — kitchen hero photo is already there, dim and ready
5. 2.8s → 3.4s — title, subtitle, CTAs, scroll indicator stagger in over the photo
6. Visitor's first impression: gallery, not contractor.

That sequence is the art-website's signature. Lift it.

---

## 2. Design System (BUILD THIS FIRST — PHASE 1)

### 2.1 Colors

Defined as CSS variables in a single new file: `assets/css/design-system.css`.

```css
:root {
  /* Brand */
  --paradise-forest-900: #0e1a11; /* deepest, footer bg */
  --paradise-forest-800: #1c2a1f; /* primary dark, nav/buttons */
  --paradise-forest-700: #2a3d2e; /* hover states */

  --paradise-brass-500: #b58c45; /* primary accent — CTAs, underlines */
  --paradise-brass-400: #c9a05e; /* hover state */
  --paradise-brass-100: #f1e6cc; /* tinted backgrounds */

  /* Neutrals — warm */
  --paradise-cream: #fbf8f1; /* default page bg */
  --paradise-canvas: #f5f0e6; /* alternating section bg */
  --paradise-stone-300: #d8d2c6; /* borders */
  --paradise-stone-500: #8a8579; /* secondary text */
  --paradise-ink-900: #1a1814; /* primary text — warm near-black */
  --paradise-ink-700: #2d2a24; /* secondary text */

  /* Semantic */
  --paradise-success: #4a6b3f;
  --paradise-error: #a23b2c;
}
```

### 2.2 Typography

Load via `<link>` in `includes/header.php` head section:

```html
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap"
  rel="stylesheet"
/>
```

Type scale (in `design-system.css`):

```css
:root {
  --font-display: "Playfair Display", Georgia, serif;
  --font-sans: "Outfit", -apple-system, BlinkMacSystemFont, sans-serif;
}

h1,
.h1 {
  font-family: var(--font-display);
  font-weight: 600;
  font-size: clamp(2.5rem, 6vw, 5rem);
  line-height: 1.05;
  letter-spacing: -0.02em;
}
h2,
.h2 {
  font-family: var(--font-display);
  font-weight: 500;
  font-size: clamp(2rem, 4vw, 3.5rem);
  line-height: 1.1;
  letter-spacing: -0.015em;
}
h3,
.h3 {
  font-family: var(--font-display);
  font-weight: 500;
  font-size: clamp(1.5rem, 2.5vw, 2.25rem);
  line-height: 1.2;
}
h4 {
  font-family: var(--font-sans);
  font-weight: 600;
  font-size: 1.25rem;
}

.eyebrow {
  font-family: var(--font-sans);
  font-weight: 500;
  font-size: 0.875rem;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--paradise-brass-500);
}

body {
  font-family: var(--font-sans);
  font-size: 1.0625rem;
  line-height: 1.65;
  color: var(--paradise-ink-900);
  font-weight: 400;
}
.lead {
  font-size: 1.25rem;
  line-height: 1.55;
  color: var(--paradise-ink-700);
}
.small {
  font-size: 0.9375rem;
}
```

### 2.3 Spacing rhythm

```css
:root {
  --space-section: clamp(4rem, 8vw, 7rem); /* py for sections */
  --space-section-lg: clamp(5rem, 10vw, 9rem); /* py for hero */
  --container-max: 1280px;
  --container-pad: clamp(1rem, 4vw, 2rem);
}

.container {
  max-width: var(--container-max);
  margin: 0 auto;
  padding-left: var(--container-pad);
  padding-right: var(--container-pad);
}
section {
  padding-top: var(--space-section);
  padding-bottom: var(--space-section);
}
.section-hero {
  padding-top: var(--space-section-lg);
  padding-bottom: var(--space-section-lg);
}
```

### 2.4 Component primitives

```css
/* Buttons */
.btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.875rem 1.75rem;
  font-family: var(--font-sans);
  font-weight: 500;
  font-size: 0.875rem;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  border-radius: 2px;
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  border: 1px solid transparent;
  text-decoration: none;
}
.btn-primary {
  background: var(--paradise-brass-500);
  color: var(--paradise-forest-900);
}
.btn-primary:hover {
  background: var(--paradise-brass-400);
  transform: translateY(-2px);
  box-shadow: 0 10px 25px -8px rgba(181, 140, 69, 0.5);
}
.btn-outline {
  background: transparent;
  color: var(--paradise-cream);
  border-color: var(--paradise-cream);
}
.btn-outline:hover {
  background: var(--paradise-cream);
  color: var(--paradise-forest-800);
}
.btn-ghost {
  background: transparent;
  color: var(--paradise-ink-900);
}
.btn-ghost:hover {
  color: var(--paradise-brass-500);
}

/* Cards */
.card {
  background: white;
  border: 1px solid var(--paradise-stone-300);
  border-radius: 4px;
  overflow: hidden;
  transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
}
.card:hover {
  transform: translateY(-4px);
  box-shadow: 0 20px 40px -12px rgba(28, 42, 31, 0.15);
  border-color: var(--paradise-brass-500);
}

/* Eyebrows above headings */
.section-header {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  margin-bottom: 3rem;
  text-align: center;
}
.section-header .eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
}
.section-header .eyebrow::before {
  content: "";
  width: 24px;
  height: 1px;
  background: var(--paradise-brass-500);
}
```

### 2.5 Animation system

```css
@media (prefers-reduced-motion: no-preference) {
  [data-reveal] {
    opacity: 0;
    transform: translateY(24px);
    transition:
      opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1),
      transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
  }
  [data-reveal].is-visible {
    opacity: 1;
    transform: translateY(0);
  }
}
```

Tiny IntersectionObserver script in `assets/js/reveal.js`:

```javascript
const io = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("is-visible");
        io.unobserve(e.target);
      }
    });
  },
  { threshold: 0.15 },
);
document.querySelectorAll("[data-reveal]").forEach((el) => io.observe(el));
```

No jQuery, no Animate.css, no framework. Static CSS + 15 lines of vanilla JS.

---

## 3. Component Library (PHASE 2)

Rebuild these as PHP partials in `includes/components/`. Each is a self-contained
chunk that any page can include. They take variables, output clean HTML.

| File                        | Used on                                          |
| --------------------------- | ------------------------------------------------ |
| `nav.php`                   | every page (replace `header.php` top portion)    |
| `footer.php`                | every page (rewrite the existing)                |
| `hero.php`                  | homepage + 1 variant per landing page            |
| `section_header.php`        | every content section                            |
| `cta_banner.php`            | end of most pages                                |
| `service_card.php`          | service grids                                    |
| `project_tile.php`          | gallery + portfolio sections                     |
| `testimonial_card.php`      | testimonial sections                             |
| `contact_form.php`          | contact page + lead-capture sections             |
| `floating_phone_button.php` | mobile sticky CTA (replaces the ugly gold popup) |

### 3.1 Nav (`nav.php`)

Sticky top, transparent over hero, solid forest after scroll. Mobile: hamburger
opens full-screen overlay (NOT a side drawer).

Top bar (hidden on mobile, shown on `≥md`):

- Left: small eyebrow tagline ("Lake Forest, IL · Since [YEAR]")
- Right: phone link + 4 social icons

Main bar:

- Left: logo (cream/light version over hero, dark version on scroll)
- Center: nav links — `Home / Kitchens / Bathrooms / Countertops / Locations / Gallery / About / Contact`
  - Underline reveal on hover, brass color
- Right: `Get a Free Consultation` CTA (brass button)
- Mobile: hamburger → full-screen overlay with same links stacked, big typography

### 3.2 Hero (`hero.php`)

Three variants:

1. **Hero-fullscreen** (homepage): full-bleed kitchen photo, dark gradient overlay
   (linear-gradient from rgba(14,26,17,0.7) to rgba(14,26,17,0.4)). Centered copy.
2. **Hero-split** (city pages): 60/40 split, copy left + photo right. Lighter.
3. **Hero-compact** (about, contact): 50vh max, single line of copy + breadcrumb.

Homepage hero copy template:

```
[eyebrow]    LAKE FOREST · KITCHEN REMODELING SINCE 19XX
[h1]         Kitchens designed for the way you actually live.
[lead]       30+ years redesigning kitchens, bathrooms, and full home
             interiors across Chicago's North Shore. Lake Forest based,
             owner-led, every project.
[ctas]       [Schedule a consultation]   [See our work]
```

### 3.3 Floating phone button

Mobile only (`@media (max-width: 768px)`), bottom-right, brass, just a phone icon
with `Call (847) 681-9000` text. Replaces the current `.open-button` form popup
(which is broken on mobile). Tap target ≥ 56 × 56 px.

---

## 4. Page-by-Page Spec (PHASE 3+)

### 4.1 Homepage (`index.php`)

**Sections in order:**

1. **Hero** — full-bleed kitchen, copy above
2. **Trust strip** — single horizontal row of credentials: "30+ years · 500+ projects · NKBA member · Lake Forest based" with brass divider dots
3. **Featured projects** — 6 large project tiles (use `project_tile.php`), staggered grid (`grid-cols-1 md:grid-cols-2 lg:grid-cols-3`, every 2nd row offset 24 px on desktop). Click → photo lightbox.
4. **What we do** — 4-up service cards: Kitchens · Bathrooms · Countertops · Full Home. Each card: thumbnail photo, brand name, 2-line description, brass arrow link.
5. **Process** — 4-step numbered timeline: Consultation → Design → Build → Reveal. Each step has eyebrow number ("01"), heading, 2 sentences. NOT a long paragraph.
6. **Why Paradise** — alternating image/text rows (3 of them): "Owner-led" / "Premium brands" / "North Shore expertise". Big photo on one side, short copy on the other. Reverse every other.
7. **Brand showcase** — logo strip of cabinet/countertop brands they carry (Candlelight, Fabuwood, Homecrest, Mercier, Mirage, Kahrs). Hover reveals brass tint. Click → brand page.
8. **Testimonials** — 3-up staggered grid. 5-star icon (Lucide-style, brass), 2-3 sentence quote, name + project type. Cards 2 and 4 offset down 24 px.
9. **Service area map** — simple Mapbox or static map image of North Shore IL showing service area with marker pins on cities they work in (Lake Forest, Highland Park, Glencoe, Winnetka, Lake Bluff, Northbrook, Buffalo Grove, Deerfield).
10. **Final CTA banner** — full-width forest background, brass headline, single CTA button.
11. **Footer**

### 4.2 Service / category pages

`counter_tops.php`, `kitchens.php` (new), `bathrooms.php` (new), `full_home.php` (new).

Template:

1. Compact split hero (image right, copy left)
2. "Materials we work with" grid of 8-12 material samples with names
3. "Recent projects" — 3-6 project tiles, click → lightbox
4. Process refresher — 3-step condensed version
5. Brand showcase (same as homepage component)
6. CTA banner
7. Footer

### 4.3 Brand showcase pages

`candlelight.php`, `fabuwood.php`, `homecrest.php`, `mercier.php`, `mirage.php`, `kahrs.php`.

Template:

1. Brand logo + 1-line eyebrow ("Cabinetry partner since YYYY")
2. Hero photo of a finished kitchen featuring this brand
3. 2-3 paragraph brand story — keep it tight, not blocky
4. Featured products grid (8 tiles, each a product line)
5. "See it in our projects" — 4-6 finished-kitchen photos using this brand
6. CTA: "Schedule a showroom visit"
7. Footer

### 4.4 City landing pages

`chicago.php`, `highland.php`, `lake_forest.php`, `buffalo_grove.php`, `winnetka.php`, `glencoe.php`, `deerfield.php`, `florida.php`.

**Delete duplicates** (`buffalo_grove_2.php`, `highland_2.php`, `highland_3.php`, etc.) — back them up first.

Template:

1. Compact split hero with city name in headline
2. "Kitchens we've designed in [city]" — 4-6 actual project photos from that city if possible (preserve current photo galleries, just re-skin the container)
3. Why [city] homeowners choose Paradise — 3 short paragraphs, NOT one big block
4. Local context — addresses or zip codes served, neighborhoods mentioned
5. CTA banner with phone number
6. Footer

### 4.5 Gallery (`gallery.php`)

Masonry grid of every finished-kitchen photo on the site. Filter chips at top:
`All | Kitchens | Bathrooms | Countertops | Modern | Traditional | Transitional`. Click photo → lightbox with project title, location, materials used.

Use a tiny vanilla masonry lib (Masonry.js or CSS columns). No jQuery.

### 4.6 About (`about.php`)

1. Hero-compact: "30 years designing the North Shore's most thoughtful kitchens"
2. Story — 4-5 short paragraphs (NOT 1 long one). Break into sections: Origin · Approach · The Shop · The Team
3. Owner portrait + bio block — photo, name, short bio
4. Team grid — if there are more team members. Even if it's just the owner, show a portrait.
5. Service area
6. Showroom info — address, hours, photo
7. CTA banner
8. Footer

### 4.7 Contact (`contact.php`)

Two-column desktop, stacked mobile:

**Left:**

- Eyebrow: "Get in touch"
- H2: "Let's talk about your project"
- 1 short paragraph (2 sentences max)
- Office details: address, hours, phone, email — with icons
- Static map (Google embed) of Lake Forest office

**Right:**

- Form: Name · Email · Phone · Project type (select) · Timeline (select) · Message
- Big brass submit button
- Reassurance copy under form: "We respond within 1 business day. No spam, no high-pressure sales."

Keep the existing `contactmail.php` handler — just update the form action. Don't break what works.

### 4.8 Dashboard (CMS, internal)

Keep the dashboard functional. **Reskin it minimally** with the new colors and
typography for staff comfort, but don't redesign the architecture. Owner uses it
to add countertops, kitchens, etc. Out of scope for the public redesign — Phase
6 only if there's time.

---

## 5. Content Rewrite Rules

This is what Brady specifically called out — text is too long and blocky.

### 5.1 Hierarchy rule

Every section needs THREE things, in this order:

1. **Eyebrow** (uppercase brass label, 3-5 words max)
2. **Heading** (Playfair, 1 line ideal, 2 lines max, sentence-case not Title-Case)
3. **Body copy** (Outfit, 2-3 sentences max OR a 3-5 item bulleted list)

If a section needs more than 3 sentences, it should be **broken into multiple sub-sections** with their own headings.

### 5.2 Paragraph length

**Never more than 3 lines** of body text in a single paragraph. If you have more
to say, split it into 2 paragraphs, OR use a bulleted list, OR turn it into a
3-column grid of small cards.

### 5.3 Headlines: sentence case

- ❌ "Kitchen Remodeling Done The Right Way"
- ✅ "Kitchen remodeling done the right way"

Sentence-case headlines feel modern and conversational. Title Case feels dated.

### 5.4 No marketing fluff

- ❌ "Welcome to Paradise Home Design Inc, where we provide the finest quality kitchen and bathroom remodeling services in the Lake Forest, IL area and surrounding communities."
- ✅ "Kitchens designed for the way you actually live."

### 5.5 Show, don't tell

The current site has multiple "Why choose us" paragraphs. Replace with:

- One photo of a finished kitchen
- One stat ("30+ years")
- One testimonial quote

That's more persuasive than 4 paragraphs of self-praise.

### 5.6 Call-to-action verbs

- Bad: "Click Here", "Submit", "Learn More"
- Good: "Schedule a consultation", "See our kitchens", "Get a quote"

### 5.7 Page word-count caps

| Page type    | Max words |
| ------------ | --------- |
| Homepage     | 600       |
| Service page | 450       |
| Brand page   | 350       |
| City page    | 400       |
| About        | 700       |
| Contact      | 150       |

Hit these caps. If you can't, the writing isn't tight enough.

---

## 6. Mobile rules (NON-NEGOTIABLE)

1. **All tap targets ≥ 44 × 44 px** (Apple HIG minimum). Phone button ≥ 56 × 56.
2. **Body text ≥ 17 px** on mobile. No 14 px body. Old Bootstrap defaults are too small.
3. **Hero photos must keep their subject visible at 375 px wide** — use `object-position` carefully. Crop test on iPhone SE size first.
4. **Forms inputs ≥ 16 px font-size** to prevent iOS auto-zoom.
5. **Nav must be one-handed reachable** — hamburger top-right, full-screen overlay opens with items in the lower 60% of screen so thumb can reach.
6. **Floating phone CTA** sticky bottom-right on mobile. Not on desktop.
7. **No horizontal scroll, ever.** Test every page in Chrome devtools at 320 px width.
8. **Image lazy-loading.** All `<img>` get `loading="lazy"` except the LCP hero image.
9. **Stack everything aggressively below `md` (768 px).** Two-column → one. Three-column → one. Four-column → two then one.

---

## 7. Performance budget

- Total page weight ≤ **2 MB** including images (currently the homepage is ~6 MB)
- LCP ≤ **2.5 s** on Slow 4G
- CLS = 0 (set `width` / `height` on every image)
- TTI ≤ **3.5 s** on Slow 4G
- Lighthouse mobile score ≥ **90 across the board** (Perf / A11y / Best Practices / SEO)

Achieve by:

- Removing Bootstrap, Font Awesome, Animate.css, MeanMenu, Magnific Popup, jQuery, Swiper. Keep ONLY `design-system.css` + `reveal.js`.
- Converting images to WebP (cPanel has an image optimizer; or use Squoosh).
- Lazy-loading every below-the-fold image.
- Preloading the hero image: `<link rel="preload" as="image" href="...">`.

---

## 8. SEO & technical

- Keep all existing `<title>`, `<meta description>`, `<link rel="canonical">`, schema.org LocalBusiness markup. **Do not lose the local SEO foundation.**
- Add `og:image` for every page using a representative project photo.
- Sitemap.xml — generate fresh after redesign, submit to GSC.
- 301 redirects: if any old page URLs change, set redirects in `.htaccess` so existing Google rankings don't drop.
- **Install free SSL via cPanel AutoSSL** before relaunch. The expired cert is a search-rank killer.
- Remove the `.sucuriquarantine/` folder + `filter.php` artifact + 1 GB `.zip` backups from `public_html` — they bloat the host and the zips contain a vulnerable WordPress copy.

---

## 9. Implementation phases (the actual execution plan)

Each phase is one PR / one work session. Test on staging URL before pushing live.

### Phase 1 — Design system (1 session)

- Create `assets/css/design-system.css` with all of section 2
- Create `assets/js/reveal.js`
- Add Google Fonts link to `includes/header.php` `<head>`
- Verify locally by loading the homepage with ONLY design-system.css enabled — fonts and colors should already feel different even before redoing the HTML.

### Phase 2 — Component library (1 session)

- Build `includes/components/` partials listed in section 3
- Rebuild `includes/header.php` to use new nav
- Rebuild `includes/footer.php`
- Test by reloading every page — the chrome (nav + footer) should already feel premium even though page bodies are unchanged.

### Phase 3 — Homepage (1 session)

- Rewrite `index.php` body from scratch using new partials + section 4.1 spec
- Pull copy from existing index.php where useful, otherwise generate fresh
- Use existing kitchen photos — don't replace them. They're the strongest asset.

### Phase 4 — Service + brand pages (2 sessions)

- Rewrite `counter_tops.php`, create `kitchens.php` and `bathrooms.php` if missing
- Rewrite all 6 brand pages with new template
- **Set 301 redirects** in `.htaccess` for any URL changes

### Phase 5 — City pages + cleanup (1 session)

- Rewrite the 8 active city pages
- **Delete duplicates** (`buffalo_grove_2.php`, `highland_2.php`, `highland_3.php`, `captcha1.php`, `captchas.php`, `@@contactmail.php@@`, `assets.zip`, `paradisehomedesigninc.com.zip`, `component(1).zip`) — back them up to a local `backups/legacy-files/` folder before deleting from server
- Delete `.sucuriquarantine/`, `filter.php`, the 1 GB zip backups in public_html parent

### Phase 6 — Gallery + about + contact (1 session)

- Rewrite gallery with masonry + filter chips
- Rewrite about page
- Rewrite contact page — careful not to break the existing contactmail.php form handler

### Phase 7 — Performance + SEO sweep (1 session)

- Convert images to WebP, generate responsive sizes
- Lazy-load below-fold images
- Install SSL via cPanel AutoSSL
- Run Lighthouse, fix anything below 90
- Submit fresh sitemap to GSC

### Phase 8 — Dashboard reskin (optional)

- Apply new colors + fonts to dashboard pages without changing architecture

---

## 10. Workflow for every page edit

Repeat this for every file you touch:

```bash
# 0. Load creds
set -a; source ~/.config/paradise-website/credentials; set +a

# 1. Back up the live file
REMOTE=paradisehomedesigninc.com/index.php
mkdir -p ~/Desktop/paradise-home-design-website/backups/$(date +%Y-%m-%d)
curl -sk --ssl-reqd -u "$FTP_USER:$FTP_PASSWORD" \
  "ftp://$FTP_HOST/$REMOTE" \
  -o "$HOME/Desktop/paradise-home-design-website/backups/$(date +%Y-%m-%d)/$(basename $REMOTE)"

# 2. Pull working copy
curl -sk --ssl-reqd -u "$FTP_USER:$FTP_PASSWORD" \
  "ftp://$FTP_HOST/$REMOTE" \
  -o "$HOME/Desktop/paradise-home-design-website/local/$(basename $REMOTE)"

# 3. Edit in your editor of choice

# 4. Push back
curl -sk --ssl-reqd -T "$HOME/Desktop/paradise-home-design-website/local/$(basename $REMOTE)" \
  -u "$FTP_USER:$FTP_PASSWORD" \
  "ftp://$FTP_HOST/$REMOTE"

# 5. Verify
open "https://paradisehomedesigninc.com/$(basename $REMOTE)"
```

There is no staging environment. Every push is live. **Always back up first.**

---

## 11. Done definition

A page is "done" when:

- [ ] Loads at < 2 MB total weight
- [ ] Lighthouse mobile ≥ 90 (Perf / A11y / BP / SEO)
- [ ] Tested at 375 px, 768 px, 1280 px widths in browser devtools
- [ ] All tap targets ≥ 44 px
- [ ] All images have `loading="lazy"` (except LCP) and explicit `width`/`height`
- [ ] Body text ≥ 17 px mobile, ≥ 18 px desktop
- [ ] Uses ONLY `design-system.css` (no Bootstrap, no Animate.css, no inline `<style>`)
- [ ] Uses ONLY Playfair Display + Outfit fonts (no Arial)
- [ ] All paragraphs ≤ 3 lines
- [ ] Has eyebrow + heading + concise body on each section
- [ ] Word count under section 5.7 cap
- [ ] Photos visible at mobile width without cropping the subject
- [ ] CTA above the fold
- [ ] Phone number tappable (`<a href="tel:...">`) everywhere it appears
- [ ] Reviewed against an equivalent page on RealLaw or Sher LLP and feels equally premium

---

## 12. Out of scope (don't touch unless asked)

- The dashboard CMS architecture (only reskin in Phase 8)
- The other domains on the same hosting (`prestigiouskitchen.com`, `prestigioushomedesign.com`) — leave alone
- The WordPress install at the hosting root — leave alone
- Database schema (the dashboard uses a database for products; don't migrate it)
- The `@@component`, `@@contactmail.php@@` artifacts — delete them, don't refactor
- Email signature / business cards / Google Business Profile — out of scope unless asked

---

## 13. Open questions for Brady (ask before executing Phase 1)

1. **Founding year** of Paradise Home Design Inc? (Need for hero copy and trust strip)
2. **Owner's name** for the bio block on About page?
3. **Project count** to claim (e.g. "500+ kitchens designed")?
4. **NKBA / NARI / industry memberships** to cite?
5. **Awards or press mentions?**
6. Is the **Florida page** (`florida.php`) still relevant or legacy?
7. Are there **email subscribers / a CRM** to preserve in the migration?
8. Any **upcoming launch deadline**, or open-ended timeline?

---

_This document is the spec. Edits to the spec require Brady's approval. Future Claude
sessions should mark progress against the Phase checklist in this file as PRs land._
