# Editing the Paradise site

Workflow for making code changes to https://paradisehomedesigninc.com.

## Setup once

```bash
cd ~/Desktop/paradise-home-design-website
mkdir -p local backups
```

Credentials live at `~/.config/paradise-website/credentials` (mode 600).
If it doesn't exist yet, ask Brady for the FTP password and create it from the template
in `CLAUDE.md`.

## Pull a file down

```bash
set -a; source ~/.config/paradise-website/credentials; set +a
REMOTE=paradisehomedesigninc.com/index.php   # path on the server (from ftp root)
LOCAL=local/index.php                         # where to save it

# Backup first
mkdir -p "backups/$(date +%Y-%m-%d)"
curl -s -k --ssl-reqd \
  -u "$FTP_USER:$FTP_PASSWORD" \
  "ftp://$FTP_HOST:$FTP_PORT/$REMOTE" \
  -o "backups/$(date +%Y-%m-%d)/$(basename $REMOTE)"

# Pull working copy
curl -s -k --ssl-reqd \
  -u "$FTP_USER:$FTP_PASSWORD" \
  "ftp://$FTP_HOST:$FTP_PORT/$REMOTE" \
  -o "$LOCAL"
```

## Edit `$LOCAL` however you want, then push it back

```bash
curl -s -k --ssl-reqd -T "$LOCAL" \
  -u "$FTP_USER:$FTP_PASSWORD" \
  "ftp://$FTP_HOST:$FTP_PORT/$REMOTE"
```

The new file is live the moment that upload finishes. No staging. No deploy step.

## Verify

```bash
curl -sI "https://paradisehomedesigninc.com/$(basename $REMOTE)" | head -5
open "https://paradisehomedesigninc.com/"   # eyeball it in the browser
```

## Pull an entire folder (e.g. all assets/css/)

`curl` doesn't recurse over FTP. Easiest options:

- **lftp** (install: `brew install lftp`) — has recursive `mirror`:
  ```bash
  lftp -u "$FTP_USER,$FTP_PASSWORD" \
    -e "set ssl:verify-certificate no; mirror /paradisehomedesigninc.com/assets/css local/assets/css; bye" \
    ftps://$FTP_HOST
  ```
- **Cyberduck** — GoDaddy gave you the `.duck` config file. Open it, paste the password,
  drag folders around in the GUI. Easy for one-off bulk moves, but slower in scripts.

## Recovering from a bad edit

Every push to the server overwrites the live file. If something breaks:

```bash
# Find the most recent backup
ls -lt backups/*/  | head

# Push the backup back up
curl -s -k --ssl-reqd -T backups/2026-05-28/index.php \
  -u "$FTP_USER:$FTP_PASSWORD" \
  "ftp://$FTP_HOST:$FTP_PORT/paradisehomedesigninc.com/index.php"
```

Always back up before you push. The site has no version control of its own.
