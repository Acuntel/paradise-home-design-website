# Agent Fleet Findings & Status — 2026-05-28/29

Six specialist agents audited the site in parallel. This logs what each found, what's
**DONE/deployed**, what needs **BRADY's action** (off-site / account access), and what's
**DEFERRED** (risky or heavy). Companion: `GROWTH_MASTER_PROMPT.md`, `CONTENT_GAP_AUDIT.md`.

## ✅ DONE & deployed live this session

- **Site-wide GA4 + LocalBusiness/GeneralContractor schema + business meta** (`headtags.php`).
- **Brand photo galleries restored** (candlelight 11, fabuwood/homecrest/medallion/woodland/henry 8, mercier 3, holiday 8).
- **Footer review links** (Google/Yelp/BBB) + keyword-front city titles + fixed `&amp;` bug.
- **AEO:** `/llms.txt` (real brands), `/robots.txt` (AI crawlers GPTBot/ClaudeBot/PerplexityBot/Google-Extended/etc. allowed + sitemap, removed harmful `crawl-delay:60`), **FAQ + FAQPage schema** on kitchens/bathrooms/countertops + auto-generated FAQ on every city page (`includes/components/faq.php` — one array drives visible FAQ AND schema, no cloaking).
- **Corrected sitemap.xml** (29 URLs, lastmod, Florida dropped).
- **Homecrest KCMA certification** credibility copy restored.
- **Florida page → noindex** (off-brand for North Shore local SEO).
- **UI/UX:** preloader 2400ms→1100ms + hero reveal retimed (no more ~3s blank hero), nav legibility scrim over light hero photos, snappier button transitions + brass sheen on hero CTA, real clickable city-tile cards (were dead inline-styled links), 5.0★ rating in trust strip, reduced-motion guard, tighter hero headline measure. Compact-hero contrast fix (earlier).

## �ç NEEDS BRADY (off-site / account access — can't be done in code)

**Google Business Profile + Reviews (HIGHEST ROI — see GBP agent playbook below):**

- Log into business.google.com: check for **suspension banner / duplicate pins / dashboard-vs-public review-count gap** (diagnoses the 100→30 drop).
- Set **primary category** to the narrowest accurate one (Kitchen Remodeler OR Bathroom Remodeler) — the #1 local-pack ranking lever.
- File review-reinstatement via support.google.com/business/gethelp with an evidence pack (names/dates/screenshots; pull old reviews from web.archive.org). Post in the GBP Community "missing reviews" thread; reference the **Feb 2026 review-display event**.
- Likely causes of the drop: Feb-2026 platform event (recoverable) + old low-trust reviewer accounts + any past review-gating / shop-tablet / event-burst collection (NOT recoverable). **Stop any review-gating immediately.**
- Stand up the review-velocity engine: ask EVERY finished client (no gating, no incentives, from their own phone), steady drip ~5-10/mo. SMS + email templates are in the GBP agent output.

**Backlinks (biggest durable lever — see backlink agent table):**

- Claim/optimize existing listings (NAP-consistent): Yelp, BBB, Angi, Atly, LF/LB Chamber.
- **Brand dealer-locators** (highest value, lowest competition — just an admin request to each rep): Fabuwood `/dealers`, Homecrest `/dealer-locator`, Medallion, Candlelight `/find-a-showroom`, Holiday Kitchens, R.D. Henry, Woodland, Mirage, Mercier, Kährs, Schaub, Richelieu. MasterBrand rep can batch Homecrest+Medallion+Woodland.
- Free citations: Google Business, Bing Places, Apple Business Connect, Houzz Pro (+photos), Thumbtack, Nextdoor Business, Foursquare, Manta.
- Associations: NKBA directory (+ Chicago Mid-West chapter, CKBD cert), NARI Chicagoland.
- Local: pitch Lake Forester/Patch a feature; realtor/designer reciprocal links; a local sponsorship for a .org link.
- Competitor backlink replication: run Ahrefs/Semrush free checkers on top-3 competitors, replicate link categories.

**NAP consistency fixes** (off-site — these hurt local SEO):

- Standardize to ONE format everywhere: `225 E Deerpath Rd Unit 80` (no `#`, one-word "Deerpath"). Current inconsistencies: BBB says "Deer Path" (two words) + "Unit 80" + ZIP+4; Chamber/Yelp/Yahoo say "Ste 80". Fix BBB + Chamber + GBP to match.

**Other:** Verify Google Search Console + submit sitemap.xml; set up the lead spreadsheet (decision pending); add GA4 `generate_lead`/`call_click` conversion events; start Local Services Ads license/insurance paperwork (launch LSA only after reviews rebuild past ~50).

## ⏸ DEFERRED (valuable but risky/heavy — do in a careful dedicated pass)

- **Image WebP conversion** — hero PNGs are 1.3–2.5 MB each (homepage LCP = 1.29 MB `flash/big/5.png`, worst `flash/big/6.png` = 2.48 MB). Converting all `*/big/*.png` → WebP ~75q + resize to ≤1920px = ~85% size cut and the single biggest Core Web Vitals win. Needs image tooling + re-upload of many files.
- **.htaccess cleanup** — (a) force HTTPS+www 301 (SSL is now VALID so this is safe), (b) 301 `.php`→`.html`, (c) **kill the catch-all `RewriteRule ^(.+)/$ products.php?ctab=$1`** which generates infinite empty-title `/{anything}/` pages (real thin-content/crawl liability). Deferred because a bad .htaccess 500s the whole live site — needs a careful, backed-up pass.
- **Hero `<img>` swap** — replace CSS `background-image` with a real `<img fetchpriority="high">` for better LCP + `srcset`. Pairs with WebP work.
- **Project-tile "lookbook" overlay** (hover caption reveal) — nice polish, see UI agent item #4.
- **Real partner-brand logos** in the homepage brand strip (currently serif text spans).
- **Blog/News section** (4-6 evergreen articles) — fresh-content SEO + AEO surface.

## Notes / corrections to agent claims

- `design_consultation.php` DOES exist in the new site (content agent said missing — it was wrong).
- rdhenry & candlelight brand stories were ALREADY enriched (1981 Wichita history / Buffalo origin) — only Homecrest's KCMA was genuinely missing (now added).
- City pages DO carry LocalBusiness schema (via city_page.php) — only gallery/brand/service/about/contact lacked it; now covered by the site-wide canonical in headtags.php.
- AEO honest caveat: `llms.txt` is low-cost but not yet broadly fetched by major LLMs (May 2026) — the real AEO wins are the AI-crawler allows, FAQ schema, and answer-first copy, all now live.
