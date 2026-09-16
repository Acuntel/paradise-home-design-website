# Content Gap Audit — Old Site vs Redesign

> 2026-05-28. Compares the OLD pages (`local/legacy/`, `local/sample/`) against the
> CURRENT live redesign (`local/site/`). Verified against the shared components
> (`includes/components/*`) so the numbers reflect what actually renders, not just the
> stub data files. The redesign is a big quality win — this is purely about valuable
> content/SEO signals that got dropped in the migration and are worth restoring.

## TL;DR — what's actually missing (ranked by impact)

1. **Brand-specific gallery images** — OLD brand pages showed 8–11 real photos each
   (Candlelight 11, Medallion/Woodland/Homecrest/Fabuwood/R.D.Henry 8, Richelieu 9).
   The new brand template renders only **3 generic project tiles** + 8 text product
   cards. ~80–100 real brand photos no longer appear anywhere on the brand pages.
2. **Structured data (LocalBusiness schema) stripped from most pages.** OLD had it on
   index, gallery, counter_tops, contact, about, highland, design_consultation,
   products. NEW has it ONLY on `index.php` and the city pages (via `city_page.php`).
   **Missing now:** gallery, every brand page, counter_tops, kitchens, bathrooms,
   about, contact, showroom, design_consultation.
3. **`business:contact_data:*` Open Graph meta** (street, locality, phone) was on most
   OLD pages; NEW has it ONLY on `index.php`. Hurts how pages render when shared.
4. **No Houzz / Yelp / Google Business Profile links** anywhere (footer only has FB,
   IG, YouTube, TikTok). For a remodeler, Houzz + Google reviews are the #1 trust
   signals — and tie directly into the Google-reviews problem.
5. **Keyword-rich location titles flattened.** e.g. OLD `highland.php` title was
   "Luxury and Modern Kitchen Remodel | Renovation Highland Park"; NEW is the formulaic
   "Kitchen & Bath Remodeling · Highland Park, IL · Paradise Home Design".
6. **Homepage News/Blog section removed.** OLD index pulled a `news` table; NEW has no
   blog/news. That's lost fresh-content SEO surface (and an AEO opportunity).
7. **Thin/abandoned location pages:** `florida.php` (0 neighborhoods, 0 zips, 3 photos)
   and `vernon_hills.php` (3 photos vs 6 elsewhere) look unfinished.
8. **Condensed brand narratives** — specific credibility claims dropped, e.g. Homecrest
   KCMA Environmental Stewardship certification; Candlelight "made in the Niagara
   region, NY, since 1990"; R.D. Henry full history (104 door styles, 10 wood species,
   16 stains, 19 paints, 80+ premium finishes — the numbers ARE kept as product cards,
   the story prose is trimmed).

## What was NOT lost (agents initially overstated — corrected here)

- Brand **story** still renders (2–3 short paragraphs via `$bp_story`).
- All brand **product lines** preserved as 8 cards each.
- Core business facts intact: phone (847) 681-9000, email paradisehd400@gmail.com,
  address 225 E Deerpath Rd Unit #80 Lake Forest IL 60045, hours Mon–Fri 9–5 / Sat by
  appt, founded 1986 / "38 years", full service-area town list, NKBA member, GA4
  `G-JT93KM5WJV`.
- Design process (4 steps), testimonials (6), countertop materials + brands, showroom
  details — all present, several improved.
- City pages **do** carry LocalBusiness schema (via the component) — agents missed this.

## Highest-value restorations (recommended order)

| #   | Fix                                                                                                            | Effort                              | Why it matters                                                   |
| --- | -------------------------------------------------------------------------------------------------------------- | ----------------------------------- | ---------------------------------------------------------------- |
| 1   | Add LocalBusiness schema (+ `business:contact_data` OG) to a shared `<head>` include so EVERY page gets it     | Low (1 include, edits headtags.php) | Biggest local-SEO regression; one fix covers the whole site      |
| 2   | Add a per-brand photo gallery to `brand_page.php` (pull the 8–11 real images that already exist on the server) | Medium                              | Restores ~80–100 real photos; brand pages become showcases again |
| 3   | Add Houzz + Google Business + Yelp links to footer                                                             | Low                                 | Trust signals + review-recovery lever                            |
| 4   | Restore keyword-rich location/brand `<title>`s and meta descriptions                                           | Low                                 | Direct ranking impact on city pages                              |
| 5   | Re-add a Blog/News section (even 4–6 evergreen articles)                                                       | Medium                              | Fresh-content SEO + AEO surface; ties into the "rank #1" goal    |
| 6   | Finish or hide `florida.php` and `vernon_hills.php`                                                            | Low                                 | Remove "abandoned" look                                          |
| 7   | Re-inject dropped credibility claims (KCMA cert, made-in, founding years) into brand stories                   | Low                                 | Trust + long-tail keywords                                       |

## Raw notes

- Brand template that controls all brand pages: `includes/components/brand_page.php`
  (renders story + products + 3 project tiles; NO brand gallery, NO schema).
- City template: `includes/components/city_page.php` (HAS schema).
- Shared head: `includes/headtags.php` (fonts + CSS + reveal.js only — no schema, no OG).
- Brand image folders already on server (e.g. `candlelight/big/1..11`, `medallion/big/1..8`).
