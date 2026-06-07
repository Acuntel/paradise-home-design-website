# Paradise Home Design Inc — Website

Custom **PHP** site (no framework, no build step — each page is a standalone `.php`) at
**paradisehomedesigninc.com**, on GoDaddy shared hosting. Edited live over FTPS.

---

## ⛔ HOW TO MAKE A CHANGE GO LIVE ("deploy" / "push")

**Deploy = FTP upload to the GoDaddy server. NOT git.**
The live site is the files on GoDaddy. The ONLY way to change it is to upload the file
over FTPS. There is no CI, no webhook, no build.

- `git push` / "push to main" here pushes a docs+code SNAPSHOT to GitHub. It does
  **NOTHING** to the live site. Never tell Brady a change is live because you committed/pushed.
- Live edits are instant and there's no staging. Be careful.

### The one and only upload command (ftplib — ALWAYS use this)

⚠️ **Never `curl -T`.** curl uploads >16 KB die after the first 16 KB TLS record and leave
the LIVE file **truncated → site breaks** (symptom: curl exit 18). curl _downloads_ are fine.
Always upload with Python `ftplib.FTP_TLS`, which verifies by re-download:

```bash
set -a; source ~/.config/paradise-website/credentials; set +a
SRC="local/site/kitchens.php"                       # local edited file
DEST="paradisehomedesigninc.com/kitchens.php"       # path from FTP root
FTP_HOST="$FTP_HOST" FTP_USER="$FTP_USER" FTP_PASSWORD="$FTP_PASSWORD" SRC="$SRC" DEST="$DEST" python3 - <<'PY'
import os, ssl, ftplib, io
ctx=ssl.create_default_context(); ctx.check_hostname=False; ctx.verify_mode=ssl.CERT_NONE
f=ftplib.FTP_TLS(context=ctx); f.connect(os.environ['FTP_HOST'],21,timeout=90)
f.login(os.environ['FTP_USER'],os.environ['FTP_PASSWORD']); f.prot_p(); f.set_pasv(True)
data=open(os.environ['SRC'],'rb').read()
f.storbinary('STOR '+os.environ['DEST'], io.BytesIO(data), blocksize=8192)
buf=io.BytesIO(); f.retrbinary('RETR '+os.environ['DEST'], buf.write)   # verify
print('MATCH' if buf.getvalue()==data else 'MISMATCH', len(data),'bytes'); f.quit()
PY
```

To deploy several files, loop the STOR/RETR over a `files=[(src,dest),...]` list on ONE
connection; for 60+ files reconnect per file (the session times out mid-run). Delete with
`f.delete(path)` (curl `-Q -DELE` breaks on the chroot path).

### Standard change flow

1. **Pull** the live file(s) → `local/site/...` (curl download, any size is safe).
2. **Back up** the live copy → `local/backups/<YYYYMMDD-HHMMSS>-<what>/` before overwriting.
3. **Edit** locally.
4. **Upload** with the ftplib block above; confirm it prints `MATCH`.
5. **Verify rendered**: `curl https://www.paradisehomedesigninc.com/<page>.html` and grep for
   your new text + for `Parse error|Fatal error|Warning:`. (PHP isn't installed locally, so
   this live fetch IS the lint.) Send ONE request — Sucuri WAF resets rapid curl loops (exit 000).

---

## FTP / access

- **FTP host:** `173.201.177.53` port `21`, **explicit FTPS** (`--ssl-reqd -k`; cert is
  `*.prod.phx3.secureserver.net` so skip verify). User `claude@paradisehomedesigninc.com`.
  Password in `~/.config/paradise-website/credentials` (mode 600, not in git):
  `set -a; source ~/.config/paradise-website/credentials; set +a` → `$FTP_HOST/$FTP_USER/$FTP_PASSWORD/$FTP_PORT`.
- **Chroot root** = `/home/uohk6u60orev/public_html/`; Paradise files are under
  `paradisehomedesigninc.com/` from there (the chroot also exposes other sites on the account).
- **Download one file:**
  `curl -s -k --ssl-reqd -u "$FTP_USER:$FTP_PASSWORD" "ftp://$FTP_HOST:$FTP_PORT/paradisehomedesigninc.com/index.php" -o local/site/index.php`
- **cPanel:** GoDaddy delegate access for bradyschwartz25@gmail.com → godaddy.com → account
  switcher → "Shared with me" → Paradise Home Design Inc → Web Hosting → Manage → cPanel.
  Host `pspizcpnl459185.prod.phx3.secureserver.net`, user `uohk6u60orev`, IP `173.201.177.53`.
- **Content CMS** (product listings only, not design/code): https://paradisehomedesigninc.com/dashboard
  — user `HomeDesigns`, pw `Paradise@2026`.

---

## Site structure & where to edit

Pages are data-driven via shared components in `includes/components/`.

| Change                                 | File                                                                                                                                    |
| -------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| Homepage                               | `index.php`                                                                                                                             |
| Kitchens / Bathrooms / Countertops     | `kitchens.php`, `bathrooms.php`, `counter_tops.php` — each just sets `$sp_*` vars then `include "includes/components/service_page.php"` |
| Nav / footer / `<head>`                | `includes/components/nav.php`, `site_footer.php`, `includes/headtags.php`                                                               |
| CSS (colors/fonts/layout)              | `assets/css/design-system.css`                                                                                                          |
| Brand showcase                         | `<brand>.php` (e.g. `fabuwood.php`, `qcci.php`, `adelphi.php`)                                                                          |
| City landing page                      | `<city>.php` (`chicago.php`…) or `city_page.php`/`ts_page.php` templates                                                                |
| Gallery (+ collections/projects modal) | `gallery.php`                                                                                                                           |
| Contact form handler / call tracker    | `contactmail.php`, `track_call.php` (helpers in `includes/lead_notify.php`)                                                             |
| Leads dashboard                        | `/leads.php` (pw `ParadiseLeads2026`) — reads `leads/leads.csv`                                                                         |

**Routing gotcha:** `.htaccess` maps `.html`→`.php` with EXPLICIT per-page
`RewriteRule x.html?$ x.php` lines (no generic rule). Every NEW page needs its own rewrite
line added or its `.html` URL 404s. Sitemap is `sitemap.xml`.

---

## Business facts (don't re-invent)

- **Cabinet partners = QCCI (Quality Custom Cabinetry), Adelphi, Holiday Kitchens, Fabuwood.**
  NOT Candlelight/Medallion (scrubbed site-wide). Homecrest / Woodland / R.D. Henry still
  appear in some copy (e.g. the kitchens FAQ) but are UNCONFIRMED — confirm with Shiva before
  removing (they may be real partners).
- **Leads:** GoDaddy blocks outbound SMTP (all ports) AND PHP `mail()` is dropped by Gmail
  (no SPF/DKIM). Every lead is captured in `leads/leads.csv` + `/leads.php` dashboard
  (always reliable). Email notify rides FormSubmit.co (HTTP, flaky). No real email key yet.
- Client (Shiva + Brady) is reviewing the site **section by section**; expect incremental copy
  edits. Pending photos arrive by email (Irene/Shiva) — don't invent project photos or stats.

## Repo vs server

This git repo = docs (`CLAUDE.md`, `MASTER_PROMPT.md`, `docs/`) + a working snapshot under
`local/site/` (gitignored backups in `local/backups/`). It is history/notes, **not** the deploy
path — see the deploy section above. The 17 GB live tree (with GoDaddy's backup cruft) is never
fully mirrored.
