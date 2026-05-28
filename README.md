# paradise-home-design-website

Docs and access for the **Paradise Home Design Inc** website
(https://paradisehomedesigninc.com), a custom-PHP site on GoDaddy shared hosting.

This repo is **not** a mirror of the site. The site code lives on GoDaddy. This repo
holds the hosting layout, workflow notes, and pointer to credentials needed to edit it.

See [`CLAUDE.md`](./CLAUDE.md) for full instructions. Credentials live outside this
repo at `~/.config/paradise-website/credentials` (mode 600, never committed).

## Quick start

```bash
set -a; source ~/.config/paradise-website/credentials; set +a

curl -s -k --ssl-reqd \
  -u "$FTP_USER:$FTP_PASSWORD" \
  "ftp://$FTP_HOST:$FTP_PORT/paradisehomedesigninc.com/" | head
```

If you see a directory listing, you're in.
