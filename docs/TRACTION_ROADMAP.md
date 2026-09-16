# Paradise Home Design — Traction Roadmap

> Output of the 2026-05-31 multi-agent audit (18 agents: 8 auditors → 8 adversarial
> verifiers → synthesis → completeness critic), every claim verified against the live
> site. Source transcript: workflow `wf_6ee5886d-8e5`.

## ✅ SHIPPED THIS SESSION (dev, deployed + verified live)

1. **Killed the authority leak.** Removed the `.htaccess` catch-all that turned any
   `/anything/` URL into a 200-status empty-title clone of products.php. `/xyz/` now 404s
   (branded `404.php`). 410'd dead scripts (products, products2, projects, cart, captcha,
   sitemap.html).
2. **Canonical 301s.** http→https and non-www→www now do a single 301 hop to
   `https://www.paradisehomedesigninc.com/`.
3. **Gzip enabled.** Homepage HTML 31.8 KB → 7.7 KB (~76% smaller); + long-cache headers
   for static assets.
4. **Removed the exposed Gmail app password** from `mail_config.php` (it never worked —
   GoDaddy blocks SMTP). ⚠️ OWNER: revoke that app password in the Google account.
5. **GA4 `generate_lead` event** fires on `thankyou.php` (mark it a Key Event in GA4).
6. **De-falsified + de-templated city pages.** Removed the false "We're a 15-minute drive"
   claim (it rendered on all 6 towns incl. Lake Forest HQ and Chicago). Each city now has
   true, town-specific reasons, a named permit office, and tiered cost FAQs.
7. **Connected schema `@graph`** in `headtags.php`: Organization + WebSite (stable `@id`s)
   on every page, LocalBusiness + 4 Service nodes + `knowsAbout` where appropriate. JSON
   validated on homepage, service, and city pages.
8. **Copy fixes:** bathrooms & countertops closing CTAs (were inheriting the kitchen line);
   Highland Park title now includes "Bath".
9. **Enriched `llms.txt`:** fixed hours (10–5), added the 4 blog guides, the "since 1986 /
   500+ kitchens / 40 years" stat, and superlative Q&A for AI citation.
10. **Inline lead form** now on every service + city page (was click-out only) — honeypot
    protected, logs to the dashboard.

## ⏳ NEXT DEV (not yet done)

- **Lead EMAIL transport** — still needs ONE HTTP API key (Web3Forms free, or Resend).
  GoDaddy blocks SMTP; FormSubmit (no-key) is unreliable. Until then leads are captured in
  `/leads.php` + leads.csv. Wire `lead_notify.php` to the key when provided.
- **WebP image conversion** — `flash/big/*.png` ≈ 9.77 MB (hero 5.png = 1.29 MB). Convert to
  WebP ≤200 KB, repoint the hero CSS `background-image` + the `<link rel=preload>`, add
  width/height to gallery `<img>`. Biggest remaining Core Web Vitals win.
- **`llms-full.txt`** (currently 404) with full page + blog text.
- **BreadcrumbList** schema + visible breadcrumbs on inner pages.
- **GA4 depth** (critic): confirm gtag ships, add `form_submit`/scroll events, link GSC↔GA4,
  add `contact` event in the call-button listener, consent mode, a KPI dashboard.
- **Spam/bot protection** on the form transport (honeypot done; add Cloudflare Turnstile),
  privacy policy + cookie notice (needed once analytics/retargeting run), basic a11y pass,
  and an uptime/synthetic form-submit monitor (email broke silently once).

## 📋 OWNER ACTIONS (off-site — can't be done in code)

1. **Google Business Profile (highest off-site lever).** Verify/​set primary category to
   **Kitchen Remodeler** (+ Bathroom Remodeler, Cabinet store, Countertop store). Re-check
   at 30 days (Google reverts contractor edits).
2. **Recover the ~70 lost reviews.** Reviews Management Tool → per-review appeals for
   policy removals; open a **GBP Support case** for the bulk drop (cite the Feb-2026 known
   review-display bug, get a Case ID). Re-pull the live count first.
3. **Review velocity (compliant):** 6–10/month steady, QR card at job completion + neutral
   all-customer SMS/email 3–5 days post-completion (NO sentiment gating, NO "name your
   designer"). Verify the 6 homepage testimonials are REAL Google reviews (the 1:1 town
   mapping looks seeded — replace any fabricated ones; trust + policy risk).
4. **Lock ONE canonical NAP** everywhere — recommend `225 E Deerpath Rd, Suite 80, Lake
Forest, IL 60045`. Fix BBB ("Deer Path"→"Deerpath", "Unit 80"→"Suite 80", drop ZIP+4),
   Chamber ("Ste 80"), Yelp, Atly, Experience, Angi. (Site currently uses "Unit #80"
   consistently — pick one and the dev side will match.)
5. **Houzz Pro profile** (pro.houzz.com) — 20–30 photos, all 11 service-area towns, "Get
   Reviews." Top parity move vs Drury Design (987 Houzz reviews / 4.9).
6. **kb.nkba.org** member profile + NKBA Chicago Midwest + NARI Chicago directories.
7. **Brand dealer-locator links:** push Homecrest + Mirage first (confirmed link-passing);
   request listing from the others (verify each renders in raw HTML, not a JS widget).
8. **PR engine:** "40 Years on the North Shore (1986–2026)" release (EIN Presswire ~$100);
   pitch Daily Herald Lake Forest desk, The Lake Forester, Patch.
9. **Free citations missing:** Bing Places, Apple Business Connect, Nextdoor business page.

## 🗓 30 / 60 / 90 CONTENT & GROWTH PLAN

- **30 days:** Search Console — submit sitemap, URL-removal the old `/{anything}/` clones,
  confirm single 301 hops. Ship **permit-guide** (village-by-village — near-uncontested AEO
  niche), **remodel-timeline**, **financing** pages. Reconcile all cost figures into one
  tiered framework (add a luxury tier; competitors document $100–250K North Shore kitchens).
- **60 days:** 8 **town×service money pages** (`kitchen-remodeling-winnetka`, etc., 800–1,100
  words, 70%+ unique); **new town hubs** (Glencoe, Northbrook, Deerfield, Lake Bluff,
  Highwood) + a `service-area.php` hub. **Before/after sliders** on dedicated
  `/projects/<town>-<style>` URLs with `ImageObject` schema (needs "before" photos from the
  owner — none exist on the server yet). `cabinet-brands-guide.php` comparison hub. Gated
  "North Shore Remodel Planning Guide" PDF.
- **90 days:** Cost cluster (bathroom cost, kitchen ROI, quartz-vs-granite-vs-quartzite),
  ideas/inspiration pages, 3–5 YouTube videos with `VideoObject` schema. Retrofit
  kitchens/bathrooms into pillar hubs. ~2 pages/week cadence.

## 🚀 PAID / OTHER CHANNELS (critic additions)

- **Google Local Services Ads** (Google Verified badge, pay-per-lead) — fastest lead
  source while SEO compounds; needs license/insurance verification (start now, ~1–4 wks).
- **Instagram + Pinterest** visual engine (Pinterest drives long-tail design search +
  referral links). **Meta/Google retargeting** pixel for the long consideration cycle.
- **Realtor / interior-designer / architect referral program** (`partners.html`) — highest-
  converting lead source for a $50K+ remodeler.

## NOTES — already-done / overstated (don't re-fix)

Schema hours are correct (10–5, matches contact page). Contact form is already low-friction
(only Name + Email required). Homepage has 6 testimonials + "5.0" trust strip. Brand pages
(Fabuwood ~600w, Medallion ~700w) already have depth + showroom CTA — build the comparison
hub, don't pad. sitemap.xml is clean (the legacy sitemap.html was the problem — now 410'd).
Hero preload is correctly pointed at the hero (only the PNG payload is the issue).
**Open AI-citation lane: Drury Design has no `/llms.txt` (404) — Paradise's lead is real.**
