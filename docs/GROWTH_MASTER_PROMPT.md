# Paradise Home Design — Growth & Lead-Gen Master Prompt

> The single source of truth for getting **the most qualified remodeling leads**
> to paradisehomedesigninc.com and converting them. Read top to bottom. Execute in
> roadmap order (§9). Every tactic here is legitimate (no cloaking, no spam) so it
> compounds instead of getting penalized.
>
> Site facts: custom PHP on GoDaddy, edited live over FTPS (see CLAUDE.md — **upload
> with the Python ftplib snippet, NOT curl**, or you'll truncate the live file).
> Business: Paradise Home Design Inc · 225 E Deerpath Rd Unit #80, Lake Forest IL 60045
> · (847) 681-9000 · paradisehd400@gmail.com · founded 1986 · NKBA member.

---

## 0. The goal, stated as math

Leads = **Traffic × Conversion-rate**. You win by pushing both, in this order of ROI
for a local remodeler:

1. **Google Business Profile + reviews** (the local pack drives the most high-intent
   calls — this is #1 for a home-services business, above the website).
2. **Local SEO** (rank the site for "kitchen remodeling <town> IL" across every town).
3. **Conversion-rate optimization** (don't waste the traffic you already get).
4. **Backlinks + citations** (the durable moat that lifts everything above).
5. **AEO** (be the answer ChatGPT/Gemini/Perplexity give for North Shore remodeling).

A remodeler's lead is worth thousands, so even +5 leads/month is a major win. Optimize
for **qualified calls and form fills**, not raw traffic.

---

## 1. Conversion-rate optimization (do first — it's free traffic multiplier)

**Already live:** site-wide GA4, sticky mobile call button, contact form → email +
SMS + (client inbox), call-tap tracker, fast hero, schema.

**Add, in priority order:**

- **"We respond within 1 business hour" promise** near every CTA. Speed-to-lead is the
  #1 close-rate lever; say it and mean it (the SMS pipeline already makes it possible).
- **Free design consultation offer** as the primary CTA everywhere (not "Contact us").
  Offers convert; generic contact forms don't.
- **Multi-step form** (Project type → Timeline → Budget band → Contact). Multi-step
  out-converts one long form by 20–40% because step 1 is a low-commitment click.
- **Trust strip above the fold**: "38 years · 5★ on Google & BBB · NKBA member · Lake
  Forest based." Borrow the numbers; they're real.
- **Financing line** ("Ask about financing") if Paradise offers it — removes the #1
  objection on a $30k+ remodel.
- **Exit-intent / scroll CTA** on gallery + city pages ("Planning a remodel? Get a free
  quote"). Gallery is the highest-intent page — never let it dead-end.
- **Click-to-call everywhere** with `tel:` (done in footer/nav) + a header phone number
  on desktop, not just mobile.
- **Photo captions with town names** (done in gallery) — doubles as long-tail SEO.

## 2. Tracking stack — "track everyone, capture every lead"

**Live now:** GA4 (`G-JT93KM5WJV`) on every page (was homepage-only — fixed this
session). Contact form + call tap both fire email + SMS to Brady.

**To build:**

- **GA4 conversion events**: fire `generate_lead` on form submit (thankyou.php) and
  `call_click` on the call button (the tracker endpoint already exists — add a
  `gtag('event','call_click')` alongside the fetch). Mark both as Key Events in GA4 so
  you can see cost-per-lead by channel.
- **Lead spreadsheet** (decision pending — recommended: server `leads.csv` appended by
  contactmail.php + a `/dashboard` view, optionally mirrored to a Google Sheet via Apps
  Script webhook). Columns: timestamp, name, email, phone, project, timeline, source
  page, IP, device. This makes every lead recoverable even if an email bounces.
- **Google Search Console** — verify the domain, submit `sitemap.xml`, watch which
  queries rank. This is the SEO feedback loop; without it you're flying blind.
- **Call tracking number** (CallRail or similar) if you run ads — attributes phone
  calls to the campaign/keyword that drove them. Optional until ad spend starts.
- **Microsoft Clarity** (free) — heatmaps + session recordings to see where visitors
  drop off. Pairs with GA4.

## 3. Local SEO — own "<service> in <town> IL"

**Technical (mostly done this session):**

- LocalBusiness/GeneralContractor schema site-wide ✓ ; city-specific schema on city
  pages ✓ ; keyword-front-loaded titles ✓ ; `business:contact_data` meta site-wide ✓.
- **Sitemap**: keep `sitemap.xml` current (all city/brand/service pages) and submit in
  GSC. Add `lastmod` dates.
- **Internal linking**: every city page links to relevant service pages and 2–3 nearby
  city pages; gallery links to city pages by photo town. Spread link equity.
- **Page speed / Core Web Vitals**: hero images are large PNGs — convert to WebP and
  size them; preload only the LCP image (done on some pages). Run the `perf-audit` skill.
- **NAP consistency**: the address/phone must be **byte-identical** everywhere (site,
  GBP, Yelp, BBB, Angi, chamber). Inconsistency is the silent local-SEO killer. Current
  canonical: `225 E Deerpath Rd Unit #80, Lake Forest, IL 60045` / `(847) 681-9000`.

**Content:**

- **One strong page per town × service** ("Kitchen Remodeling in Winnetka", "Bathroom
  Remodeling in Highland Park"). City pages exist — deepen the thin ones with unique
  local copy (housing stock, permit notes, real local projects), not boilerplate.
- **Service pages** (kitchens, bathrooms, countertops, cabinetry) with real depth:
  process, materials, FAQs, before/after.
- **Reclaim dropped content** — the old site had richer brand stories + 80–100 brand
  photos (see CONTENT_GAP_AUDIT.md). Brand galleries restored this session; finish the
  narrative depth (KCMA cert, made-in claims, founding years = long-tail keywords).

**Google Business Profile (highest ROI of all):**

- Claim/optimize: correct category (Kitchen remodeler + Bathroom remodeler + General
  contractor), service area towns, hours, 100+ photos (you have them), services list,
  products, a Google-hosted "from the business" description with keywords.
- **Weekly GBP posts** (project of the week) — signals activity, ranks better.
- **Review velocity** (see §6) — the dominant local-pack ranking factor.

## 4. Backlinks — the durable moat (the "RealLaw playbook")

The pattern that worked on the law-firm sites, applied to a remodeler. Pursue in order
of effort-to-value:

1. **Free, high-trust local citations** (also fix NAP): Google Business, Bing Places,
   Apple Maps, Yelp, BBB (accredited ✓), Angi, HomeAdvisor, Houzz (critical for
   remodelers — set up a full Houzz profile + project photos), Thumbtack, Nextdoor
   Business, Lake Forest/Lake Bluff Chamber (member listing already exists), Yellowpages,
   Manta, Foursquare.
2. **Brand-partner dealer backlinks** — Candlelight, Fabuwood, Homecrest, Medallion,
   Woodland, R.D. Henry, Mercier, Mirage, Kährs all run "Where to Buy / Find a Dealer"
   locators. Get Paradise listed on each → high-relevance backlinks competitors don't have.
3. **NKBA member directory** + any IL/Chicago design associations.
4. **Local press / community**: sponsor a Lake Forest event, get the local paper
   (Lake Forester, Patch), realtor/interior-designer cross-referrals with a link.
5. **Houzz + Instagram project features** → drives both links and direct leads.
6. **Supplier & subcontractor sites** (countertop fabricators, tile suppliers) — mutual
   "trusted partners" links.
7. **Guest content** on home-design blogs / "best remodelers in <town>" roundups.

Avoid: paid link farms, PBNs, comment spam — they get the site penalized and undo §3.

**To replicate RealLaw's exact backlink profile:** export it from Search Console / an
SEO tool (Ahrefs/SEMrush "backlink profile" for reallawgroup.com), then reproduce the
_category_ of each link for the remodeling niche (directory → directory, association →
association, press → press). The transferable asset is the playbook, not the URLs.

## 5. AEO — be the answer AI assistants give

Goal: when someone asks ChatGPT/Gemini/Perplexity "best kitchen remodeler on Chicago's
North Shore," Paradise is named. This is legitimate structured content — **NOT** hidden
or cloaked pages (cloaking = Google ban; AI crawlers also discount hidden text).

- **`/llms.txt`** at the site root — a plain-text summary of who Paradise is, services,
  service area, differentiators, contact. AI crawlers increasingly read it.
- **Allow the AI crawlers** in robots.txt: GPTBot, OAI-SearchBot, ClaudeBot,
  PerplexityBot, Google-Extended (don't block them if you want to be cited).
- **FAQ content with FAQPage schema** on service/city pages ("How much does a kitchen
  remodel cost in Lake Forest?", "How long does it take?"). AI loves Q&A-formatted,
  schema-marked answers and quotes them directly.
- **Answer-first writing**: lead each section with a one-sentence direct answer, then
  detail. Both AI and featured snippets reward this.
- **Entity clarity**: consistent name/NAP + sameAs to all profiles (done in schema) so
  AI confidently resolves "Paradise Home Design" as one entity.
- **Original, citeable facts**: "38 years, 1,000+ North Shore kitchens" type stats and
  real project data give AI something concrete to cite.

## 6. Google reviews — recovery + never lose them again

Context: profile dropped ~100 → ~30. Reviews don't vanish randomly — Google filters or
removes them for policy reasons. Diagnose, then rebuild velocity.

**Why Google removes reviews (likely causes, check each):**

- **Review-gating / incentives** — asking only happy customers, or offering anything for
  a review, violates policy and triggers mass removal. (Most common cause of a big drop.)
- **Bursts from the same IP / device** — e.g. customers reviewed on the showroom's
  WiFi/tablet → flagged as fake.
- **Reviewers with no profile / one-time accounts** — filtered as low-trust.
- **Text with phone numbers, URLs, or prohibited content** — auto-removed.
- **A GBP edit, merge, duplicate listing, or suspension** — can hide reviews wholesale.
- **Third-party "review widgets"** that posted on behalf of users — purged.

**Recovery steps:**

1. In Google Business Profile Manager, check for **suspension / duplicate / merged**
   listings — reinstating a listing often restores its reviews.
2. Use the **GBP "report a problem" / reinstatement** flow for legitimately removed
   reviews; for a large drop, contact Google Business support directly with the list.
3. Confirm you're not using any **review-gating tool**; switch to asking _all_ customers.
4. Audit recent removed reviews for the patterns above and stop the cause.

**Rebuild velocity (also lifts local-pack rank):**

- Send a **direct Google review link** (the footer now links to the profile) to every
  finished-job client, from their own phone/email, spaced out over time — not in bursts.
- Aim for a steady trickle (e.g. 4–8/month) rather than a spike.
- Respond to every review (good and bad) — signals an active, legitimate business.

## 7. Paid (optional accelerant once organic + reviews are solid)

- **Google Local Services Ads (LSA)** — "Google Guaranteed" badge, pay-per-lead, shows
  above the map pack. Best paid channel for remodelers; requires license/insurance check.
- **Google Search Ads** on "kitchen remodel <town>" with call extensions.
- **Meta/Instagram** retargeting of gallery visitors with project photos.
  Track all via GA4 + a call-tracking number so you know cost-per-lead per channel.

## 8. Measurement — what "winning" looks like

- GSC impressions/clicks rising for "<service> <town> IL" queries.
- Local pack: appearing in top-3 for target towns (track with a rank tool or manually).
- GA4 Key Events (`generate_lead`, `call_click`) trending up; cost-per-lead falling.
- Review count climbing back past 100 with a steady velocity.
- Lead spreadsheet filling — and every lead getting a <1hr response.

## 9. Roadmap (execute in order)

**Done this session:**

- Site-wide GA4 (was homepage-only), site-wide LocalBusiness/GeneralContractor schema +
  city-specific schema, site-wide business contact meta, keyword-front-loaded city
  titles, restored brand photo galleries (candlelight 11 / fabuwood·homecrest·medallion·
  woodland·R.D.Henry 8 / mercier 3 / holiday 8), Google/Yelp/BBB review links in footer,
  fleshed out thin city pages, fixed double-encoded `&` title bug, fixed inner-page hero
  legibility. Verified lead email+SMS pipeline with a live test.

**Next 30 days:** Claim/optimize Google Business Profile · launch review-recovery +
velocity program · verify Search Console + submit sitemap · add `generate_lead`/
`call_click` GA4 events · build the lead spreadsheet (CSV + dashboard) · set up Houzz +
all free citations with consistent NAP · convert hero images to WebP.

**Next 60 days:** FAQ + FAQPage schema and answer-first copy on service/city pages ·
`/llms.txt` + allow AI crawlers · deepen thin city pages with unique local content ·
brand-partner dealer backlinks · restore dropped brand narrative depth.

**Next 90 days:** Blog/resource section (cost guides, "how to plan a remodel") for
long-tail + AEO · local press/sponsorship links · evaluate Local Services Ads · monthly
GBP posts cadence · review the backlink gap vs top competitors and close it.

---

_Companion docs: `CONTENT_GAP_AUDIT.md` (what the redesign dropped), `MASTER_PROMPT.md`
(the design-system redesign spec), `CLAUDE.md` (access + the ftplib upload rule)._
