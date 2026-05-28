# Access reference — Paradise Home Design Inc

All the places to log in, in one spot.

## 1. GoDaddy (hosting + domain)

Brady has **delegate access** — the account owner shared admin rights to
`bradyschwartz25@gmail.com`. There is no separate GoDaddy login for this site.

1. Sign into godaddy.com with Brady's personal GoDaddy account
2. Top-right account switcher → "Shared with me" → **Paradise Home Design Inc.**
3. From there: My Products → Web Hosting → paradisehomedesigninc.com → Manage

If delegate access is ever revoked, ask the owner to re-share via:
**GoDaddy → Account Settings → Delegate Access → Invite to Access**, with at least
"Products Edit" permission level.

## 2. cPanel (hosting control panel)

Reached only through the GoDaddy flow above. Direct URL is dynamic but for reference
the current cPanel hostname is `pspizcpnl459185.prod.phx3.secureserver.net`.

- Main user: `uohk6u60orev`
- Home: `/home/uohk6u60orev/`
- Web root: `/home/uohk6u60orev/public_html/`
- Paradise site root: `/home/uohk6u60orev/public_html/paradisehomedesigninc.com/`

Brady does NOT have the cPanel password directly. To get it: cPanel → Account
Preferences → Account Password → change it (this also changes the FTP password for
the main `uohk6u60orev` FTP account, but does NOT affect the `claude@` FTP account).

## 3. FTP (how Claude edits files)

Set up under cPanel → FTP Accounts. The `claude@paradisehomedesigninc.com` account
exists with directory set to `public_html` so it can reach every site on the hosting,
not just Paradise.

- Host: `173.201.177.53` (use IP — the ftp.prestigiouskitchen.com hostname doesn't
  resolve outside GoDaddy's network)
- Port: `21` (explicit FTPS, cert is wildcard for `*.prod.phx3.secureserver.net` so
  use `curl -k` or "skip cert verification" in the GUI client)
- User: `claude@paradisehomedesigninc.com`
- Password: stored at `~/.config/paradise-website/credentials` (mode 600, outside this
  repo). Format is `FTP_PASSWORD=...` env-var style. Source with
  `set -a; source ~/.config/paradise-website/credentials; set +a`.

If the FTP account is ever broken, recreate it under cPanel → FTP Accounts with:

- Log In: `claude`
- Domain: `paradisehomedesigninc.com`
- Directory: `public_html` (NOT the auto-filled value — that sandboxes the user)
- Quota: Unlimited

## 4. Site admin dashboard (CMS for content edits)

This is the in-app admin built into the PHP site. It lets non-developers edit
products, prices, photos, and text without touching code.

- URL: https://paradisehomedesigninc.com/dashboard
- User: `HomeDesigns`
- Password: `Paradise@2026`

Use it for content. Useless for design / layout / CSS / structural changes.

## 5. GitHub

Repo: `Acuntel/paradise-home-design-website` (private). Holds these docs only,
not the site code.

Brady's GitHub: `Acuntel` org (active account in `gh auth status`).
