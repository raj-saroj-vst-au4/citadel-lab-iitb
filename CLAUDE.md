# IITB-Citadel Securities Quantitative Research Lab — site

Informational website for a joint research lab at IIT Bombay. Served by Apache at `/citadel/`
(public URL https://www.som.iitb.ac.in/citadel/).

Rebuilt from scratch in November 2026 as a seven-page PHP site with no framework, no CMS and no
build step. The previous version, a 6,373-line single-page export from a visual page builder, is
kept at [oldsrv/index-pagebuilder-20261104.php.bak](oldsrv/index-pagebuilder-20261104.php.bak)
(identical to what production served on 2026-11-16).

## To change content, edit `content/`

Words, people, projects, programs and events live in plain PHP arrays. The pages only lay them out,
so most updates never touch a page file. Every value is HTML-escaped when printed: write plain text,
not HTML.

| File | What it holds |
|---|---|
| [content/site.php](content/site.php) | Name, menu, home-page notice, address, emails, phones, map, inquiry types |
| [content/people.php](content/people.php) | Leads (PIC and first PIC), faculty, students/postdocs, staff |
| [content/research.php](content/research.php) | Four research areas, six projects (team members by people key) |
| [content/programs.php](content/programs.php) | Ph.D. fellowship and post-doctoral research: facts, eligibility, apply links |
| [content/events.php](content/events.php) | Upcoming events (QRD 2027 conference) and past events with photos |

Upcoming events drop off the site by themselves the day after their `end_date`; move them to
`past` when there are photographs. The first upcoming event is also highlighted at the top of the
home page and in its Events section.

## Layout

| Path | What it is |
|---|---|
| `index.php`, `about.php`, `research.php`, `programs.php`, `people.php`, `events.php`, `contact.php` | The pages. `.htaccess` serves them without `.php` (`/citadel/people`). |
| `partials/bootstrap.php` | Loads `content/`, defines helpers (`e()`, `url()`, `asset()`, `avatar()`, `icon()`, date formatting). Hides past upcoming events. |
| `partials/header.php`, `partials/footer.php` | `<head>`, site header, inner-page title band; footer. |
| `assets/css/site.css` | All styles, hand-written. Tokens at the top. |
| `assets/js/site.js` | Mobile menu, eligibility tabs, Events photo carousel, contact form. Each part no-ops when its markup is absent. |
| `assets/fonts/` | Self-hosted Source Serif 4 (headings) and IBM Plex Sans (text). |
| `assets/img/` | **Generated** web images (WebP). Do not edit by hand. |
| `assets/images/` | Originals (some 4-34 MB). Never referenced by pages except the two logos. |
| `assets/php/contact-handler.php` | The only server-side behaviour. |
| `tools/make_images.py` | Rebuilds `assets/img/` from `assets/images/`. Needs Pillow. |
| `includes/`, `oldsrv/` | Dead (older versions). Blocked by `.htaccess`. |

Old one-page links (`/citadel/#people`, `#research-projects`, …) are redirected to the matching
page by a small script in `partials/header.php` (home page only).

## Images

Pages use `assets/img/…` only. To add or replace a photo: put the original in `assets/images/`,
add a line to the right table in `tools/make_images.py` (`PEOPLE` takes a crop centre and size),
run `python3 tools/make_images.py`, then reference the output name in `content/`.

Five originals are `apache`-owned mode 700 on production and cannot be rsynced (`sudeep.jpg`,
`Varsha.png`, `ashish2.jpg`, `iitbcitadel.png`, `SKPH7801.JPG`). They are publicly served, so curl
them into a folder and pass that folder to the script (see its docstring). The QRD logos come from
qrdconference.com.

## Design rules

- Palette: navy `#002868` (Citadel wordmark), blue `#004898` (IIT Bombay crest), tint `#F3F6FB`,
  amber `#F2B134` only for "open/upcoming" badges. Tokens in `:root` in `site.css`.
- Motion is deliberately minimal: colour changes on hover/focus, and the Events carousel
  cross-fade (pauses on hover/focus/hidden tab, has a pause button, no autoplay under
  `prefers-reduced-motion`). Do not add entrance animations.
- People photos are large: sticky square portraits for the two PICs, photo cards for faculty and
  staff, 11rem portraits for students.

## The contact form

`contact.php` posts `FormData` via `fetch()` to `assets/php/contact-handler.php`, which replies
with JSON `{success, message, errors[]}` and a matching HTTP status (405 for non-POST, 422
validation, 429 rate limit, 502 mail failure). It sends through IITB's SMTP relay with vendored
PHPMailer 6.8.0. Fixed in the rebuild: catches `\Throwable` (not PHPMailer's `Exception`), escapes
once (no more `&amp;amp;`), honeypot field `website`, 20 messages/hour per IP, refuses
`Sec-Fetch-Site: cross-site`, strips control characters, length limits.

**Still open:**

- **SMTP credentials.** They are no longer in the handler (which is in git) but in
  `assets/php/mail-config.local.php`: git-ignored, refused by `.htaccess`, readable by group
  `www-data` only. They are still inside the web root, still a personal account, and **the
  password needs rotating** (it sat in a world-readable file for months). The handler merges, in
  order: its own defaults, `mail-config.local.php`, then `/etc/citadel/mail-config.php` (or the
  path in `CITADEL_MAIL_CONFIG`), each returning an array with the same keys.
- **A git checkout alone has no SMTP login,** so the form fails with 502 until
  `mail-config.local.php` (or the `/etc` file) exists on that server. An rsync deploy from this
  folder does carry it across.
- Auth account ≠ From address (lines 15 vs 17), which invites SPF/DMARC rejection.

## Security

- `.htaccess` returns 403 for `content/`, `partials/`, `tools/`, `includes/`, `oldsrv/`, `.claude/`,
  `assets/php/PHPMailer/` (including `get_oauth_token.php`), `CLAUDE.md` and any `*.bak*` file —
  which also covers the three `index.php.bak-*` files that production serves publicly today.
- It also sets `nosniff`, a referrer policy and long cache lifetimes (CSS/JS are requested with
  `?v=<mtime>` by `asset()`).

## Deployment

Production is the source of truth. Pull with:

```
rsync -az r4id@10.127.1.21:/var/www/html/citadel/ /srv/www/citadel/
```

rsync exits 23 because of the five unreadable images above; that is expected. Never pull with
`--delete` (it would wipe this file and `.claude/`).

Locally the site is served by Apache at http://10.127.1.23/citadel/ (alias to this folder), which
is the preview before deploying. There is no build step: editing a file is the whole workflow.
Exclude `CLAUDE.md`, `.claude/` and `tools/` from any push to the web server.

This folder is a git repository (since 2026-11-16). Production is not: deploys are still rsync, so
git is the history, not the deployment mechanism. `.gitignore` keeps out the SMTP login, `.claude/`
and the old `index.php.bak-*` copies. The five apache-owned originals listed under Images are not
in the repository, but their derivatives in `assets/img/` are, so a checkout renders completely.
