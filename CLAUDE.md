# Paradise Home Design Inc — Website

Custom PHP website at **paradisehomedesigninc.com**, hosted on GoDaddy shared hosting.
This repo is for documentation and access info, not the site code itself (the code lives
on the GoDaddy server and is edited live over FTP).

---

## Live site

- Public URL: https://paradisehomedesigninc.com
- Admin CMS (content editing): https://paradisehomedesigninc.com/dashboard
  - User: `HomeDesigns`
  - Password: `Paradise@2026`
  - Use this to edit product listings / content. Useless for design or code changes.

## Hosting

- Provider: **GoDaddy** (shared cPanel hosting)
- cPanel hostname: `pspizcpnl459185.prod.phx3.secureserver.net`
- Shared IP: `173.201.177.53`
- cPanel main user: `uohk6u60orev`
- Primary domain on the account: `prestigiouskitchen.com` (WordPress, separate site)
- This site lives as an **addon domain** at `/home/uohk6u60orev/public_html/paradisehomedesigninc.com/`

Brady accesses cPanel via GoDaddy **delegate access** — the account owner shared admin
rights to bradyschwartz25@gmail.com. To get to cPanel: sign into godaddy.com → top-right
account switcher → "Shared with me" → Paradise Home Design Inc. → My Products → Web
Hosting → paradisehomedesigninc.com → Manage → cPanel Admin.

## FTP access (this is how Claude edits files)

- **Host:** `173.201.177.53` (the hostname `ftp.prestigiouskitchen.com` doesn't resolve
  from outside, so use the IP)
- **Port:** `21`
- **Protocol:** explicit FTPS (FTP with TLS). Use `--ssl-reqd -k` with curl — the GoDaddy
  cert is `*.prod.phx3.secureserver.net` which won't match the IP, so cert verification
  must be skipped (`-k`).
- **Username:** `claude@paradisehomedesigninc.com`
- **Password:** stored at `~/.config/paradise-website/credentials` (mode 600, outside
  this repo so it can never be committed)
- **Chroot directory:** `/home/uohk6u60orev/public_html/` — this gives access to every
  site on the hosting account, not just Paradise. Paradise files live under
  `paradisehomedesigninc.com/` from the FTP root.

### Load credentials in a shell

```bash
set -a; source ~/.config/paradise-website/credentials; set +a
```

After that, `$FTP_HOST`, `$FTP_USER`, `$FTP_PASSWORD`, etc. are available.

### Test connection

```bash
curl -s -k --ssl-reqd \
  -u "$FTP_USER:$FTP_PASSWORD" \
  "ftp://$FTP_HOST:$FTP_PORT/paradisehomedesigninc.com/" | head
```

### Download a file

```bash
curl -s -k --ssl-reqd \
  -u "$FTP_USER:$FTP_PASSWORD" \
  "ftp://$FTP_HOST:$FTP_PORT/paradisehomedesigninc.com/index.php" \
  -o local/index.php
```

### Upload a file (overwrites in place)

```bash
curl -s -k --ssl-reqd -T local/index.php \
  -u "$FTP_USER:$FTP_PASSWORD" \
  "ftp://$FTP_HOST:$FTP_PORT/paradisehomedesigninc.com/index.php"
```

---

## Site structure

The Paradise site is **custom PHP, not WordPress.** No framework, no build step — each
page is a standalone `.php` file.

```
paradisehomedesigninc.com/
├── index.php              # Homepage
├── about.php              # About Us
├── contact.php            # Contact form
├── gallery.php            # Photo gallery
├── counter_tops.php       # Countertops landing page
├── chicago.php            # Chicago location
├── highland.php           # Highland location
├── buffalo_grove.php      # Buffalo Grove location
├── candlelight.php        # Candlelight Cabinetry page
├── fabuwood.php           # Fabuwood Cabinetry page
├── homecrest.php          # Homecrest Cabinetry page
├── ...                    # Many more brand/city pages
├── assets/                # CSS, JS, images
├── includes/              # Shared PHP includes (header, footer, db config)
├── img/                   # More images
├── dashboard/             # Admin CMS — protected by login
│   ├── countertops.php
│   ├── addcountertops.php
│   ├── change-countertops.php
│   └── ...
├── designuploads/         # User-uploaded design photos
└── .htaccess              # Apache rewrites
```

## Common edits — where to look

| What you want to change        | File(s)                             |
| ------------------------------ | ----------------------------------- |
| Homepage hero / sections       | `index.php`                         |
| Site-wide header / nav / logo  | `includes/header.php` (likely)      |
| Site-wide footer               | `includes/footer.php` (likely)      |
| Colors, fonts, layout (CSS)    | `assets/css/*.css`                  |
| Countertops gallery page       | `counter_tops.php`                  |
| A specific city landing page   | `<city>.php` (e.g. `chicago.php`)   |
| A brand showcase               | `<brand>.php` (e.g. `fabuwood.php`) |
| Contact form recipient / logic | `contactmail.php`                   |
| Admin login for the CMS        | `dashboard/index.php`               |

---

## Known issues (flag to client when relevant)

- **SSL certificate is EXPIRED** ("Your domain is at risk!" in cPanel). The site loads
  without HTTPS security. Fix via cPanel → SSL/TLS or use AutoSSL.
- **Site was likely hacked at some point.** `.sucuriquarantine/` folder exists in the
  hosting root and a `filter.php` 0-byte file exists in public_html — common malware
  artifact. The Sucuri cleanup appears done but the residue is still there.
- **Two huge `.zip` backups** (1 GB each) sit in public_html. They're old backups eating
  disk space and should be deleted once confirmed safe.
- **Many duplicate / orphan PHP files** (e.g. `buffalo_grove.php` AND `buffalo_grove_2.php`,
  multiple `captcha*.php` variants, `@@contactmail.php@@`). Site is messy from years of
  ad-hoc edits.

---

## Workflow for making changes

1. Pull the file(s) you want to edit down to `local/` via curl (see commands above).
2. Edit locally. Test by reading the PHP for context — there's no build step.
3. **Before uploading: download a backup copy** to `local/backups/` with a timestamp so
   we can revert if something breaks.
4. Upload via curl `-T`. The new file is live the moment the upload finishes.
5. Hit the public URL and verify visually.

There's no staging environment. Edits are live immediately. Be careful.

---

## What lives in this repo vs the server

This repo (`paradise-home-design-website`) contains:

- This `CLAUDE.md` (access + workflow)
- `README.md` (short overview for GitHub)
- `.gitignore` (excludes `local/`, backups, OS junk)
- `docs/` (deeper documentation: ACCESS.md, EDITING.md)

Credentials live at `~/.config/paradise-website/credentials` (NOT in this repo, NOT in
git). If you're a future Claude on a fresh machine, ask Brady for the FTP password and
write it to that file with mode 600.

The actual site code lives on the GoDaddy server. We pull files into `local/` (gitignored)
when editing and push them back when done. We do NOT keep a full mirror in git because the
site is 17 GB with backups and we'd just be cloning GoDaddy's mess.
